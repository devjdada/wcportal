<?php

namespace App\Livewire\Workers;

use App\Models\OrdainedWorker;
use App\Models\OwPosting as ModelsOwPosting;
use App\Models\PostingLocation;
use App\Models\User;
use Livewire\Component;
use Carbon\Carbon; // Import Carbon for date manipulation
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
class OwPosting extends Component
{
    use WithPagination;
    public Carbon $begin;  // Use Carbon for date objects
    public Carbon $end;
    public array $datesArray;


    // #[Url()]
    public $searchPosition = '';
    public $searchUser = '';
    //#[Url()]
    public $sortBy = 'created_at';
    // #[Url()]
    public $sortDir = 'DESC';
    // #[Url()]
    public $numPerPosition = 10;
    public $numPerUser = 10;
    public $dateFilter;
    public $positionChecked;
    public $select_position = [];


    public function mount()
    {
        $this->begin = Carbon::now()->startOfMonth();  // Set begin to first day of current month
        $this->end = Carbon::now()->endOfMonth();

        $currentDate = $this->begin->clone();  // Clone to avoid modifying original date
        $dates = [];
        while ($currentDate <= $this->end) {
            if ($currentDate->isSunday()) {
                $dates[] = [
                    'day' => 'Sunday',
                    'date' => $currentDate->format('Y-m-d')
                ];
            }

            if ($currentDate->isWednesday()) {
                $dates[] = [
                    'day' => 'Wednesday',
                    'date' => $currentDate->format('Y-m-d')
                ];
            }

            $currentDate->addDay(); // Use Carbon's addDay method
        }
        $this->datesArray = $dates; // Set end to last day of current month
    }
    public function assign()
    {
        dd($this->positionChecked);
    }

    public function selectPosition($id)
    {
        if (in_array($id, $this->select_position)) {
            $this->select_position = array_diff($this->select_position, [$id]);
        } else {
            $this->select_position[] = $id;
        }
    }

    public function assignPosition($user)
    {
        dd($this->select_position);
        foreach ($this->select_position as $sp) {
        }
    }


    public function autoPost()
    {
        $dates = $this->datesArray;



        $locations = PostingLocation::where('station_id', Auth::user()->station_id)->get();

        foreach ($dates as $date) {
            foreach ($locations as $location) {
                if ($date['day'] === 'Wednesday') {
                    ModelsOwPosting::create([
                        'station_id' => 1,
                        'tag' => $location->tag,
                        'wing' => $location->wing,
                        'location' => $location->location,
                        'service' => $date['day'],
                        'for' => $date['date'],
                    ]);
                }
                if ($date['day'] === 'Sunday') {
                    ModelsOwPosting::create([
                        'station_id' => 1,
                        'tag' => $location->tag,
                        'wing' => $location->wing,
                        'location' => $location->location,
                        'service' => 1 . $date['day'],
                        'for' => $date['date'],
                    ]);
                    ModelsOwPosting::create([
                        'station_id' => 1,
                        'tag' => $location->tag,
                        'wing' => $location->wing,
                        'location' => $location->location,
                        'service' => 2 . $date['day'],
                        'for' => $date['date'],
                    ]);
                    ModelsOwPosting::create([
                        'station_id' => 1,
                        'tag' => $location->tag,
                        'wing' => $location->wing,
                        'location' => $location->location,
                        'service' => 3 . $date['day'],
                        'for' => $date['date'],
                    ]);
                }
            }
        }
        // $ow = OrdainedWorker::where('station_id', Auth::user()->station_id)->get();
        // $posting  = ModelsOwPosting::whereBetween('for', [$this->begin, $this->end])
        //     ->get();
    }

    public function render()
    {

        $posting  = ModelsOwPosting::whereBetween('for', [$this->begin, $this->end])
            ->search($this->searchPosition)
            ->orderBy($this->sortBy, $this->sortDir)
            ->where(function ($query) {
                if ($this->dateFilter) {
                    $query->where('for', $this->dateFilter);
                }
            })
            ->paginate($this->numPerPosition);
        $ows = OrdainedWorker::where('station_id', Auth::user()->station_id)
            ->paginate($this->numPerUser);
        return
            view('livewire.workers.ow-posting', [
                'postings' => $posting,
                'ows' => $ows
            ]);
    }
}
