<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Consultant;
class ConsultantController extends Controller
{
    public function index()
    {
        $consultant = Consultant::all();
        return view('consultant.index', compact('consultant'));
    }

    public function create()
    {
        return view('consultant.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
        ]);

        Consultant::create($validatedData);

        return redirect()->route('consultant.index')->with('success', 'Consultant créé avec succès.');
    }

    public function edit($id)
    {
        $consultant = Consultant::findOrFail($id);
        return view('consultant.edit', compact('consultant'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
        ]);

        $consultant = Consultant::findOrFail($id);
        $consultant->update($validatedData);

        return redirect()->route('consultant.index')->with('success', 'Consultant mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $consultant = Consultant::findOrFail($id);
        $consultant->delete();

        return redirect()->route('consultant.index')->with('success', 'Consultant supprimé avec succès.');
    }
}
