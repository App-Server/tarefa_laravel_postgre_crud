<?php

namespace App\Http\Controllers;

use App\Models\IntracomModel;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class IntracomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = IntracomModel::paginate(10);
        return view('intracom.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intracom.create_intranet_comunicacao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo_do_comunicado' => 'required',
            'descricao_do_comunicado' => 'required'
        ]);

        IntracomModel::create($request->all());

        session()->flash('success', 'Comunicado enviado com sucesso');

        return redirect()->route(('intracom.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $infos = IntracomModel::paginate(10);
        $totalInfo = IntracomModel::count();
        return view('intracom.show_intranet_comunicacao', ['infos' => $infos, 'totalInfo' => $totalInfo]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infos = IntracomModel::findOrFail($id);
        $infos->delete();

        return redirect()->route('intracom.create')->with('success', 'Excluido com sucesso!');
    }
}
