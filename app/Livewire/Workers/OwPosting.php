<?php

namespace App\Livewire\Workers;

use App\Models\OrdainedWorker;
use App\Models\OwPosting as ModelsOwPosting;
use App\Models\PostingLocation;
use App\Models\User;
use Livewire\Component;
use Carbon\Carbon;
// Import Carbon for date manipulation
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('layouts.admin')]

class OwPosting extends Component
{
    use WithPagination;
    public Carbon $begin;
    // Use Carbon for date objects
    public Carbon $end;
    public array $datesArray;
    public bool $autoPostOwDialog = false;

    // #[ Url() ]
    public $searchPosition = '';
    public $searchUser = '';
    //#[ Url() ]
    public $sortBy = 'created_at';
    // #[ Url() ]
    public $sortDir = 'DESC';
    // #[ Url() ]
    public $numPerPosition = 10;
    public $numPerUser = 10;
    public $dateFilter;
    public $positionChecked;

    public $autoPostMonth;
    public $autoPostDate;
    public $autoPostWing;
    public $autoPostDateArray = [];
    public $filterWing = [];

    public function mount()
    {
        $this->begin = Carbon::now()->startOfMonth();
        // Set begin to first day of current month
        $this->end = Carbon::now()->endOfMonth();

        $currentDate = $this->begin->clone();
        // Clone to avoid modifying original date
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

            $currentDate->addDay();
            // Use Carbon's addDay method
        }
        $this->datesArray = $dates; // Set end to last day of current month

        // dd($this->begin, $this->end, $this->datesArray);
        $wings =  DB::table('posting_locations')
            ->select('wing', DB::raw('count( * ) as total'))
            ->groupBy('wing')
            ->get();

        $wingPosition = [];
        $wingOw = [];
        foreach ($wings as $wing) {

            $wingPosition[$wing->wing] = PostingLocation::where('wing', $wing->wing)
                ->where('station_id', Auth::user()->station_id)
                ->get();

            $wingOw[$wing->wing] = OrdainedWorker::where('wing', $wing->wing)
                ->where('station_id', Auth::user()->station_id)
                ->get();
        }
        foreach ($wingPosition as $wp) {
        }
        // dd($wings, $wingPosition, $wingOw);
    }
    public function testFn()
    {

        $d = $this->autoPostMonth . '-02';

        $carbonDate = Carbon::createFromFormat('Y-m-d', $d);

        // Get the first and last day of the month
        $firstDayOfMonth = $carbonDate->copy()->startOfMonth();
        $lastDayOfMonth = $carbonDate->copy()->endOfMonth();

        // Initialize an array to store Sundays and Wednesdays
        $sundaysAndWednesdays = [];

        // Iterate through the date range and extract Sundays and Wednesdays
        $currentDate = $firstDayOfMonth->copy();
        while ($currentDate->lte($lastDayOfMonth)) {
            if ($currentDate->isSunday() || $currentDate->isWednesday()) {
                $sundaysAndWednesdays[] = [
                    'date' => $currentDate->toDateString(),
                    'day' => $currentDate->format('l')
                ];
            }
            $currentDate->addDay();
        }
        $this->autoPostDateArray = $sundaysAndWednesdays;
    }

    public function openAutoGen()
    {
        $this->autoPostOwDialog = true;
    }



    public function assignPosition($user)
    {
        $wings =  DB::table('posting_locations')
            ->select('wing', DB::raw('count( * ) as total'))
            ->groupBy('wing')
            ->get();
        dd($wings);
    }


    public function autoPost()
    {
        $date = Carbon::createFromFormat('Y-m-d', $this->autoPostDate);
        $locations = PostingLocation::where('station_id', Auth::user()->station_id)
            ->where('wing', $this->autoPostWing)
            ->get();
        $ows = OrdainedWorker::where('station_id', Auth::user()->station_id)
            ->where('wing', $this->autoPostWing)
            ->get();

        $owsArray = $ows->toArray();  // Convert the collection to an array
        shuffle($owsArray);
        $owIndex = 0;  // Index to track the current OrdainedWorker



        foreach ($locations as $location) {
            if ($owIndex >= count($owsArray)) {
                exit;  // Stop if there are no more unique users to assign
            }

            $user_id = $owsArray[$owIndex]['user_id'];

            if ($date->isWednesday()) {
                ModelsOwPosting::create([
                    'station_id' => 1,
                    'tag' => $location->tag,
                    'wing' => $location->wing,
                    'location' => $location->location,
                    'service' => 'Wednesday',
                    'for' => $this->autoPostDate,
                    'user_id' => $user_id
                ]);
            }
            if ($date->isSunday()) {
                ModelsOwPosting::create([
                    'station_id' => 1,
                    'tag' => $location->tag,
                    'wing' => $location->wing,
                    'location' => $location->location,
                    'service' => '1 Service',
                    'for' => $this->autoPostDate,
                    'user_id' => $user_id
                ]);
                $owIndex++;
                $user_id = $owsArray[$owIndex]['user_id'];
                ModelsOwPosting::create([
                    'station_id' => 1,
                    'tag' => $location->tag,
                    'wing' => $location->wing,
                    'location' => $location->location,
                    'service' => '2 Service',
                    'for' => $this->autoPostDate,
                    'user_id' => $user_id
                ]);
                $owIndex++;
                $user_id = $owsArray[$owIndex]['user_id'];
                ModelsOwPosting::create([
                    'station_id' => 1,
                    'tag' => $location->tag,
                    'wing' => $location->wing,
                    'location' => $location->location,
                    'service' => '3 Service',
                    'for' => $this->autoPostDate,
                    'user_id' => $user_id
                ]);
            }

            $owIndex++;
        }
    }
    public function autoPost2()
    {
        $dates = $this->datesArray;
        $locations = PostingLocation::where('station_id', Auth::user()->station_id)->get();
        $ows = OrdainedWorker::where('station_id', Auth::user()->station_id)->get();
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
            ->where(function ($query) {
                if ($this->filterWing) {
                    $query->where('wing', $this->filterWing);
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
