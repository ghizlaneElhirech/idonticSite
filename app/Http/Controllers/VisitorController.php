<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVisitor;
use App\Visitor; 
use App\VisitorType;
use App\User;
use App\Product;
use App\Question;
use App\Notifications\addvisitor;
use Illuminate\Support\Facades\Auth;


class VisitorController extends Controller
{ 
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();
        $visitors = Visitor::all();
        $types = VisitorType::all();
        $questions = Question::all();
        return view('Welcomes.welcome', compact('visitors', 'types','products','questions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response 
     */ 
    public function store(StoreVisitor $request)
    {

        try {
          $validated = $request->validated();
          $visitor = new Visitor(); 
        
        
          $visitor->full_name = $request->full_name;
          $visitor->email = $request->email;
          $visitor->sujet = $request->sujet;
          $visitor->message = $request->message;
          $visitor->type_id = $request->type_id;
          $visitor->save();
          
          $user = User::get();

          $visitor = Visitor::latest()->first();
       
          Notification::send($user, new \App\Notifications\addvisitor($visitor));
          
          toastr()->success('success');
          return redirect('/');
       
      }

      catch (\Exception $e){
          return redirect()->back()->withErrors(['error' => $e->getMessage()]);
      }
        
    


    }


    /*


    */


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return Response
     */
    public function update(Request $request)
    {

    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Request $request)
    {

        $visitors = Visitor::findOrFail($request->id)->delete();
        toastr()->error('Deleted');
        return redirect()->route('visitors.index');

    }
    
    
    
    
     public function MarkAsRead_all(Request $request)
    {
        $userUnreadNotification= auth()->user()->unreadNotifications;

        if ($userUnreadNotification) {
            $userUnreadNotification->markAsRead();
            return back();
        }
    }


    public function unreadNotifications_count()
    {
        return auth()->user()->unreadNotifications->count();
    }

    public function unreadNotifications()
    {
        foreach (auth()->user()->unreadNotifications as $notification) {
            return $notification->data['title'];
        }
    }

}


