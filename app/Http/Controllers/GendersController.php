<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Genders;
use Illuminate\Http\RedirectResponse;

class GendersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genders = Genders::all();
        return response()->json($genders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('genders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Genders::create([
            'id' => $request-> input('id'),
            'gender' => $request-> input('gender')
        ]);
        return redirect()->route('genders.index')->with('success', 'Gender created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gender = Genders::find($id);

        if(!empty($gender)) {
            return response()->json($gender);
        }

        else {
            return response()->json(['message' => 'Superhero not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genders $gender): View
    {
        return view('genders.edit', compact('gender'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genders $gender): RedirectResponse
    {
        $gender->update($request->all());
        return redirect()->route('genders.index')->with('success', 'Gender updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genders $gender): RedirectResponse
    {
        $gender->delete();
        return redirect()->route('genders.index')->with('success', 'Gender deleted successfully.');
    }
}
