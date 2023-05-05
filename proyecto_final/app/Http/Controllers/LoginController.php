<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buyer;
use App\Models\Product;
use App\Models\Provider;

class LoginController extends Controller
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

        return view('login');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exists = Provider::where('name', 'juan')
        ->orWhere('name', 'pedro')
        ->orWhere('name', 'maria')
        ->orWhere('name', 'luisa')
        ->orWhere('name', 'pablo')
        ->exists();

        if (!$exists) {
            $provider = Provider::create(['name'=> 'juan','dni'=> '12345678A', 'adress'=> 'Calle Mayor 1']);
            $provider = Provider::create(['name'=> 'pedro','dni'=> '87654321B', 'adress'=> 'Plaza España 2']);
            $provider = Provider::create(['name'=> 'maria','dni'=> '23456789C', 'adress'=> 'Avenida Libertad 3']);
            $provider = Provider::create(['name'=> 'luisa','dni'=> '98765432D', 'adress'=> 'Calle del Sol 4']);
            $provider = Provider::create(['name'=> 'pablo','dni'=> '34567890E', 'adress'=> 'Calle Mayor 5']);
        }   

        $usuario = $request->name;
        $dni = $request->dni;

        $siusuario = DB::table('buyers')
                ->where('name', $usuario)
                ->where('dni', $dni)
                ->first();
        
        $id = DB::table('buyers')
                ->select('buyers.id')
                ->where('buyers.name', '=', $usuario)
                ->where('buyers.dni', '=', $dni)
                ->get();

        if ($siusuario){
            return view('opciones',compact('id'));
        }else{
            return view('login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function vistaComprar($id)
    {
        return view('comprar',compact('id'));
    }


    public function articulos($id)
    {
        
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
