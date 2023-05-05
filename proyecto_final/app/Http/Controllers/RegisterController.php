<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;


class RegisterController extends Controller
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
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exists = buyer::where('name', $request->name)->exists();

        if ($exists) {
            echo("ya estas registrado"); 
        } else {
            $buyer = Buyer::create(['name'=> $request->name,'dni'=> $request->dni, 'contact'=> $request->contact]);
        return view("registrocompletado", compact(['buyer']));
        }
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
        //
    }
}
