<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::all();

        return view('persons.index', compact('persons'));
    }

    public function create()
    {
        return view('persons.create');
    }

    public function store(Request $request)
    {
        Person::create($request->only(['name']));

        return redirect()->route('person.index')
                         ->with('success', 'Person successfully created!');
    }

    public function show(Person $person)
    {
        return view('persons.show', compact('person'));
    }

    public function edit(Person $person)
    {
        return view('persons.edit', compact('person'));
    }

    public function update(Request $request, Person $person)
    {
        $person->update($request->only(['name']));

        return redirect()->route('person.index')
                 ->with('success', 'Person successfully updated!');
    }

    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('project.index')
                         ->with('success', 'Person successfully deleted!');
    }
}
