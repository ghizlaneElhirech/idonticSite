<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use CodeZero\UniqueTranslation\UniqueTranslationRule;

use App\Http\Requests\StoreTypes; 
use App\VisitorType;
 

class VisitorTypeController extends Controller
{
     /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $types = VisitorType::all();
    return view('pages.visitors_type',compact('types'));
  }



  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(StoreTypes $request)
  {

 try {
          $validated = $request->validated();
          $type = new VisitorType();
        
        
          $type->type_visitor = $request->type_visitor;
          $type->save();
          toastr()->success('success');
          return redirect()->route('types.index');
      }

      catch (\Exception $e){
          return redirect()->back()->withErrors(['error' => $e->getMessage()]);
      }


  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
   public function update(StoreTypes $request)
 {
   try {

       $validated = $request->validated();
       $types = VisitorType::findOrFail($request->id);
       $types->update([
        
         $types->type_visitor = $request->type_visitor,
       ]);
       toastr()->success('Updated');
       return redirect()->route('types.index');
   }
   catch
   (\Exception $e) {
       return redirect()->back()->withErrors(['error' => $e->getMessage()]);
   }
 }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {

    $types = VisitorType::findOrFail($request->id)->delete();
    toastr()->error('Deleted');
    return redirect()->route('types.index');

  }

}
