<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TarefaModel;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $tarefas = TarefaModel::paginate(10);
        return view('tarefa.index', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarefa.create');
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
            'titulo_da_atividade' => 'required',
            'prioridade' => 'required',
            'data_de_entrega' => 'required',
            'horario_da_entrega' => 'required',
            'quem_vai_executar_a_tarefa' => 'required',
            'descricao_da_atividade' => 'required'
        ]);

        TarefaModel::create($request->all());

        session()->flash('success', 'Tarefa criada com sucesso!');

        return redirect()->route(('tarefa.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = TarefaModel::paginate(10);
        $totalTarefas = TarefaModel::count();
        return view('tarefa.show', ['tarefas' => $data, 'totalTarefas' => $totalTarefas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarefa = TarefaModel::findOrFail($id);
        return view('tarefa.edit', compact('tarefa'));
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
        $tarefa = TarefaModel::findOrFail($id);

        $request->validate([
            'titulo_da_atividade' => 'required',
            'prioridade' => 'required',
            'data_de_entrega' => 'required',
            'horario_da_entrega' => 'required',
            'quem_vai_executar_a_tarefa' => 'required',
            'descricao_da_atividade' => 'required'
        ]);

        $tarefa->update($request->all());

        return redirect()->back()->with('success', 'Tarefa atualizada com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarefa = TarefaModel::findOrFail($id);
        $tarefa->delete();

        return redirect()->route('tarefa.index')->with('success', 'Excluído com sucesso!');
    }
}
