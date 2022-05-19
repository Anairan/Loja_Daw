<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = new Cliente();
		$clientes = Cliente::All();
		return view("cliente.index", [
			"cliente"=>$cliente,
			"clientes"=>$clientes
			]);
    }

    
    public function store(Request $request)
    {
        if ($request->get("id") !=""){
			$cliente = Cliente::Find($request->get("id"));
		}else{
			$cliente = new Cliente();
		}
		$cliente->nome = $request->get("nome");
		$cliente->cpf = $request->get("cpf");
		$cliente->save();
		$request->session()->flash("status", "salvo");
		return redirect("/cliente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::Find($id);
		$clientes = Cliente::All();
		return view("cliente.index", [
			"cliente" => $cliente,
			"clientes" => $clientes
			]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Cliente::Destroy($id);
		$request->session()->flash("status", "excluido");
		return redirect("/cliente");
    }
}
