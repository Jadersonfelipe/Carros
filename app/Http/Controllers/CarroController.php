<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{ Carro, Marca};
use DB;
use App\Http\Requests\CarroStoreRequest;

class CarroController extends Controller
{
    public function index(){
        $carros = Carro::all();
        $carros_deletados = Carro::onlyTrashed()->get();

        // dd($carros);

        return view('/Carro/index', compact('carros','carros_deletados'));
    }

    public function create(){
        $marcas = Marca::all();
        $carros = Carro::all();

        return view('/Carro/form', compact('marcas','carros') );
    }

    public function store(CarroStoreRequest $request) {
        // DB::beginTransaction();
        // try{
        
            $carros = Carro::create($request->all());
            
            // DB::commit();

            return back()->with('success', 'Usuário cadastrado com sucesso');
        // }catch(\Exception $e){
        //     DB::rollback();
        //     return back()->with('error', 'Erro no servidor');
        // }


    }



}
