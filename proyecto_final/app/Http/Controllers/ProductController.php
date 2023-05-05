<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Buyer;
use App\Models\Provider;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $id2 = substr($id, 7, -2);

        $product = Product::create(['product_type'=> $request->product_type,'brand'=> $request->brand, 'model'=> $request->model,'price'=> $request->price, 'buyer_id'=> $id2]);
        return view('hola');
    }

    public function vistaModificar (Request $request, $id)
    {   
        return view('modificar',compact('id'));
    }

    public function modificar (Request $request, $id)
    {

        $id2 = substr($id, 7, -2);

        $buyer=Buyer::findOrFail($id2);
        $buyer->name = $request->name;
        $buyer->dni = $request->dni;
        $buyer->contact = $request->contact;
        $buyer->save();

        return view('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id2 = substr($id, 7, -2);

        $buyer = Buyer::findOrFail($id2);

        echo "funcionaba lo juro :(";

        // $buyer->delete();
        
        // return view('welcome');
    }
}
