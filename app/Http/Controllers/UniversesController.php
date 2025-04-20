<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universes;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UniversesController extends Controller
{
     public function index()
    {
        $universes = Universes::all();
        return response() ->json($universes);
    }

    public function create(): View
    {
        return view('universes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        #dd($request->all());
        Universes::create([
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'type' => $request->input('type')
        ]);
        return redirect()->route('universes.index')->with('success', 'universe created successfully.');
    }

    public function show($id)
    {
        $universe = Universes::find($id);
        if(!empty($universe)) {
            return response()->json($universe);
        }
        else
        {
            return response()->json(['message' => 'Universe not found'], 404);
        }
    }

    public function edit(Universes $universe): View
    {
        //dd($universe);
        return view('universes.edit', compact('universe'));
    }

    public function update(Request $request, Universes $universe): RedirectResponse
    {
        $universe->update($request->all());
        return redirect()->route('universes.index')->with('success', 'universe updated successfully.');
    }

    public function destroy(Universes $universe): RedirectResponse
    {
        $universe->delete();
        return redirect()->route('universes.index')->with('success', 'universe deleted successfully.');
    }
}
