<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Even;
use Redirect,Response;

class EventsController extends Controller
{
        public function index()
        
    {   $eventList = Even::all();
        if(request()->ajax()) 
        { 
 
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = Even::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
         return Response::json($data);
        }
        return response()->json($eventList,200);
    }
    
    
    
     public function store(Request $request)
    {  
        $insertArr = [ 'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end
                    ];
        $event = Even::insert($insertArr);   
         return response()->json($event,201);
    }
     
    public function show($id)
    {
         $event = Even::find($id);
        if(is_null($event)){
            return response()->json(['message' => 'event not found'], 404);
        }
        return response()->json($event,200);
    }
    
    
     public function update(Request $request, $id)
    {
         $event = Even::find($id);
        if(is_null($event)){
            return response()->json(['message' => 'event not found'], 404);
            
        }
        $event->update($request->all());
        return response()->json($event,200);
    }
 
 
 
    public function destroy($id)
    {
        $event = Even::find($id);
           if(is_null($event)){
            return response()->json(['message' => 'event not found'], 404);
            }
          $event->delete();
           return response()->json(null,204);
    
    }    
 
}
