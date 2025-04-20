<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheroes;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class SuperheroesController extends Controller
{
    public function index(): View
    {
        $superheroes = Superheroes::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create(): View
    {
        return view('superheroes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        #dd($request->all());
        Superheroes::create([
            'universe_id' => $request->input('universe_id'),
            'real_firstname' => $request->input('real_firstname'),
            'real_lastname' => $request->input('real_lastname'),
            'alter_ego' => $request->input('alter_ego'),
            'superpower' => $request->input('superpower'),
            'age' => $request->input('age')
        ]);
        return redirect()->route('superheroes.index')->with('success', 'Superhero created successfully.');
    }

    public function show(Superheroes $superhero): View
    {
        return view('superheroes.show', compact('superhero'));
    }


    public function edit(Superheroes $superhero): View
    {
        //dd($superhero);
        return view('superheroes.edit', compact('superhero'));
    }

    public function update(Request $request, Superheroes $superhero): RedirectResponse
    {
        $superhero->update($request->all());
        return redirect()->route('superheroes.index')->with('success', 'Superhero updated successfully.');
    }

    public function destroy(Superheroes $superhero): RedirectResponse
    {
        $superhero->delete();
        return redirect()->route('superheroes.index')->with('success', 'Superhero deleted successfully.');
    }
}
