<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Request;
use App\Models\Consultant;
class ConsultantController extends Controller
{
    public function index()
    {
        $consultant = Consultant::all();
        //dd($consultant);
        return view('consultants.index', compact('consultant'));
    }

    public function profile_confirm()
     {

        //      Consultant::create([

        //     'profile_confimed'=>'true',
        // ]);

        // Consultant::create([

        //     'profile_confimed'=>'false',
        // ]);
        // Consultant::create([

        //     'profile_confimed'=>'false',
        // ]);



        $consultant = Consultant::where('profile_confimed', '=', false)->get();
        dd($consultant);
        return view('consultants.index', compact('consultant'));
        //return "bakiscofield0";
    }


    public function create()
    {
        return view('consultants.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
        ]);

        Consultant::create($validatedData);

        return redirect()->route('consultants.index')->with('success', 'Consultant créé avec succès.');
    }

    public function edit($id)
    {
        $consultant = Consultant::findOrFail($id);
        return view('consultants.edit', compact('consultant'));
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

        return redirect()->route('consultants.index')->with('success', 'Consultant mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $consultant = Consultant::findOrFail($id);
        $consultant->delete();

        return redirect()->route('consultants.index')->with('success', 'Consultant supprimé avec succès.');
    }
}
