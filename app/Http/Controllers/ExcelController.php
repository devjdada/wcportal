<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ExcelController
{
    public function import()
    {
        return Excel::toCollection(new \App\Imports\DataImport(), 'data.xlsx');
    }
}
