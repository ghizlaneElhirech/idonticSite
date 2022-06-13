<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProduct;
use App\Product;

class ProductAdminController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $products = Product::all();
        
        return view('pages.products', compact('products'));

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
    public function store(StoreProduct $request)
    {

        try {
          $validated = $request->validated();
          $product = new Product(); 
        
        
          $product->title = $request->title;
          if($request->hasFile('image')){
            $destination_path = 'public/images/products';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path , $image_name);
            $product->image = $image_name;
          }
          
         
          $product->save();
          
         
          
          toastr()->success('success');
          return redirect()->back()->with(toastr()->success('success'));
       
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

        $products = Product::findOrFail($request->id)->delete();
        toastr()->error('Deleted');
        return redirect()->route('products.index');

    }
}
