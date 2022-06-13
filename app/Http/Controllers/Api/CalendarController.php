<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Even;


class CalendarController extends Controller
{
    public function showEvents(Request $request) {
        $events = Even::all();
       
        return response()->json(["events" => $events]);
    }
} 