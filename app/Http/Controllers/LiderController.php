<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lider;

class LiderController extends Controller
{
    public function index() {
        $lider = Lider::all();
        $total = Lider::all()->count();
        return view('list-lider', compact('lider', 'total'));
    }

    public function create() {
        return view('include-lider');
    }

    public function store(Request $request) {
        $leader = new Lider;
        $leader->cell = $request->cell;
        $leader->name = $request->name;
        $leader->viceleader = $request->viceleader;
        $leader->host = $request->host;
        $leader->secretary = $request->secretary;
        $leader->save();
        return redirect()->route('leader.index')->with('message', 'Líder cadastrado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $leader = Lider::findOrFail($id);
        return view('alter-lider', compact('leader'));
    }

    public function update(Request $request, $id) {
        $leader = Lider::findOrFail($id); 
        $leader->cell = $request->cell;
        $leader->name = $request->name;
        $leader->viceleader = $request->viceleader;
        $leader->host = $request->host;
        $leader->secretary = $request->secretary;
        $leader->save();
        return redirect()->route('leader.index')->with('message', 'Líder alterado com sucesso!');
    }

    public function destroy($id) {
        $leader = Lider::findOrFail($id);
        $leader->delete();
        return redirect()->route('leader.index')->with('message', 'Líder excluído com sucesso!');
    }

}
