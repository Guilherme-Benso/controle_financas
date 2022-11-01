<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = Pagamento::get();
        return view("financeiro", ["pagamentos" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'descricao' => $request->descricao,
            'tipo'      => $request->tipo,
            'valor'     => $request->valor
        ];

        Pagamento::create($data);
        return redirect(route("financeiro.index"));

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
        $data = Pagamento::where('id',"=",$id)->first();
        if (empty($data)) {
            return redirect(route("financeiro.index"));
        }
        return view("edit", ["pagamento" => $data]);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'descricao' => $request->descricao,
            'tipo'      => $request->tipo,
            'valor'     => $request->valor
        ];

        Pagamento::where("id", '=', $id)->update($data);
        return redirect(route("financeiro.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Pagamento::where("id", '=', $id);
        $user->delete();
        return redirect(route('financeiro.index')); 
        
    }
}
