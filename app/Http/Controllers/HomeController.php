<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Visitor;
use App\VisitorType;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_user   =   User::count();
        $count_visitor=  Visitor::count();
      
        $client = 0;
       
        $practitioner = 0;
        
        
        
        $visitors = DB::table('visitors')->get();
        
      
 
        foreach ($visitors as $type) {
        if($type->type_id == 9){
                 $client ++;}
         elseif($type->type_id == 10){
                $practitioner ++;
         }
         
         
           
            
        
       }
     if($client != 0){
        $client = ($client/$count_visitor) * 100;
       } else{
            $client = 0;
        }
     
     
     if($practitioner != 0){
        $practitioner = $practitioner/$count_visitor * 100;
       } else { 
            $practitioner = 0 ;
        }
     
        
    $client = round($client,2);
    $practitioner = round($practitioner,2);



        $chartjs = app()->chartjs
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 350, 'height' => 200])
            ->labels(['', ''])
            ->datasets([

                [
                    "label" => "clients",
                    'backgroundColor' => ['#e683e4'],
                    'data' => [$client]
                ],
                [
                    "label" => "practitioner",
                    'backgroundColor' => ['#FFC0CB'],
                    'data' => [$practitioner]
                ],


            ])
            ->options([]);
///////////////////////////////////////////////////////////////////////////////////////////////////////////

        $chartjs_2 = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 340, 'height' => 200])
            ->labels(['clients', 'practitioners'])
            ->datasets([
                [
                    'backgroundColor' => [ '#e683e4','#FFC0CB'],
                    'data' => [$client,$practitioner]
                ]
            ])
            ->options([]);

        return view('dashboard', compact('chartjs','chartjs_2'));
       
    }
}
