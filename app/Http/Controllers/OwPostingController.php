<?php

namespace App\Http\Controllers;

use App\Http\Resources\OwPostingCollection;
use App\Models\OwPosting;
use Illuminate\Database\Query\Builder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OwPostingController
{
    public function my_posting($id)
    {
        $currentMonth = Carbon::now()->month;

        $posting = DB::table('ow_postings')
            ->where(function (Builder $query) use ($id) {
                $query->where('user_id', $id)
                    ->orWhere('backup_id', $id)
                    ->orWhere('serviced_id', $id);
            })
            ->whereRaw('MONTH(created_at) = ?', [$currentMonth])
            ->orderBy('id', 'desc')
            ->get();
        return ['posting' => $posting];

        // return OwPostingCollection::collection($posting);
    }
}
