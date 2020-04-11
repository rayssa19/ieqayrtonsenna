<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Celula;

class CelulaController extends Controller
{
    public function index() {
        $cell = Celula::all();
        $total = Celula::all()->count();
        return view('register-cell', compact('cell', 'total'));
    }

    public function create() {
        return view('register-cell');
    }

    public function store(Request $request) {
        $cell = new Celula;
        $cell->nome = $request->nome;
        $cell->leader = $request->leader;
        $cell->viceleader = $request->viceleader;
        $cell->offers = $request->offers;
        $cell->date = $request->date;
        $cell->start = $request->start;
        $cell->finish = $request->finish;
        $cell->members = $request->members;
        $cell->visitors = $request->visitors;
        $cell->total = $request->total;
        $cell->decisions = $request->decisions;
        $cell->testimonials = $request->testimonials;
        $cell->save();
        return redirect()->route('cell.index')->with('message', 'Célula cadastrada com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $cell = Celula::findOrFail($id);
        return view('alter-cell', compact('cell'));
    }

    public function update(Request $request, $id) {
        $cell = Celula::findOrFail($id); 
        $cell->nome = $request->nome;
        $cell->leader = $request->leader;
        $cell->viceleader = $request->viceleader;
        $cell->offers = $request->offers;
        $cell->date = $request->date;
        $cell->start = $request->start;
        $cell->finish = $request->finish;
        $cell->members = $request->members;
        $cell->visitors = $request->visitors;
        $cell->total = $request->total;
        $cell->decisions = $request->decisions;
        $cell->testimonials = $request->testimonials;
        $cell->save();
        return redirect()->route('cell.index')->with('message', 'Célula alterada com sucesso!');
    }

    public function destroy($id) {
        $cell = Celula::findOrFail($id);
        $cell->delete();
        return redirect()->route('cell.index')->with('message', 'Célula excluída com sucesso!');
    }

}
