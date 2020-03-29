<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    //

    public function timetable()
    {
        return view('timetable');
    }
}
