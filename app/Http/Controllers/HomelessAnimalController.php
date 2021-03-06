<?php

namespace App\Http\Controllers;

use App\Models\HomelessAnimal;
use Illuminate\Http\Request;

class HomelessAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $animals = HomelessAnimal::get();
        return view('index', compact('animals'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if(!$data['name']){
            $data['name'] = (new \App\Models\HomelessAnimal)->getRandomName($data['sex']);
        };
        HomelessAnimal::create($data);
        return redirect('/');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomelessAnimal  $homelessAnimal
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(HomelessAnimal $homelessAnimal)
    {
        return view(' edit', compact('homelessAnimal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomelessAnimal  $homelessAnimal
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, HomelessAnimal $homelessAnimal)
    {
        $homelessAnimal->update($request->all());
        return redirect('/');
    }

}
