<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Patient;
use App\Models\User;
class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nom' => 'required',
        //     'prenom' => 'required',
        //     'email' => 'required|email',
        // ]);

        $user = User::create($request->all());
        Patient::create([
            'user_id' => $user->user_id,
        ]);    

        return redirect()->route('patients.index')->with('success', 'Patient créé avec succès.');
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
        ]);

        $patient = Patient::findOrFail($id);
        $patient->update($validatedData);

        return redirect()->route('patients.index')->with('success', 'Patient mis à jour avec succès.');
    }

    public function destroy($id)
    {
        
        $patient->user->delete();

        return redirect()->route('patients.index')->with('success', 'Patient supprimé avec succès.');
    }
}
