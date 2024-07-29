<?php

namespace App\Livewire\Dashboard;

use App\Models\OrdainedWorker;
use App\Models\OwPosting; // Assuming this model exists for ordained worker postings
use App\Models\PostingLocation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

#[Layout('layouts.admin')]
class Dashboard extends Component
{
    public $user;
    public $findOw;
    public $updateDialog = false;
    public $registerOwDialog = false;

    public ?PostingLocation $pl; // Type hinting for clarity
    public string $marital;
    public int $user_id;  // Assuming user_id is an integer
    public int $station_id; // Assuming station_id is an integer
    public bool $status = true;
    public string $gender;
    public string $address;  // Assuming address is a string
    public string $dob;       // Assuming dob is a string

    // Ordained worker details (if applicable)
    public string $wing;
    public string $caller_squad;
    public string $marriage_anniversary;  // Assuming marriage_anniversary is a string

    // Ordained worker registration details
    public string $ordain_where;
    public string $ordain_date;
    public string $register = 'accept';


    public function mount()
    {
        $this->checkUserData(); // Load user data on component initialization
    }

    public function update()
    {
        $this->validate([
            'dob' => 'required|date',  // Ensure valid date format
            'marital' => 'required', // Minimum length requirement
            'gender' => 'required',  // Minimum length requirement
        ]);

        $this->user->update($this->all()); // Update only user data
        $this->updateDialog = false;
    }

    public function joinOw()
    {
        $validatedData = $this->validate([
            'ordain_date' => 'required|date',  // Ensure valid date format
            'ordain_where' => 'required|min:3'
        ]);

        $this->user_id = $this->user->id;
        $this->station_id = $this->user->station_id;

        $ordainedWorkerData = [
            'user_id' => $this->user_id,
            'station_id' => $this->station_id,
            'type' => 'ow',
            'wing' => $this->wing,
            'status' => true,
            'register' => 'accept',
            // Add other ordained worker specific fields (wing, caller_squad, etc.)
            ...$validatedData
        ];
        OrdainedWorker::create($ordainedWorkerData);
        $this->registerOwDialog = false;
    }

    public function checkUserData()
    {
        $this->user = auth()->user();

        // Handle user data completeness and display update dialog accordingly
        if (!$this->user->dob) {
            $this->updateDialog = true;
        }

        if (in_array($this->user->status, ['deacon', 'deaconess'])) {
            $this->findOw = OrdainedWorker::where('user_id', $this->user->id)->get();

            if ($this->findOw->isEmpty()) {
                $this->registerOwDialog = true;
            }
        }
    }

    public function render()
    {
        if (!Auth::user()) {  // Handle potential unauthenticated user access
            return redirect()->route('login');
        }

        $postings = PostingLocation::where('station_id', Auth::user()->station_id)
            ->get();

        return view('livewire.dashboard.dashboard', [
            'posings' => $postings
        ]);
    }
}
