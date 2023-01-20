<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountyRequest;
use App\Models\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(County $counties)
    {
        //cria um objeto com a query que será executada
        $results = $counties::orderBy('name')->oldest();

        //chama a view passando a lista de cidades
        return view('counties.index', [
            'counties' =>  $results->paginate(self::$results_per_page)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('counties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(County $county, CountyRequest $request)
    {
        $county::create( $request->all());

        $request->session()->flash('success', "Cidade $request->name incluída com sucesso!");

        return redirect('counties');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\County  $county
     * @return \Illuminate\Http\Response
     */
    public function show(County $county)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\County  $county
     * @return \Illuminate\Http\Response
     */
    public function edit(County $county)
    {
        return view('counties.edit', [
            'county' => $county
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\County  $county
     * @return \Illuminate\Http\Response
     */
    public function update(CountyRequest $request, County $county)
    {
        $county->update($request->all());

        $request->session()->flash('success', "Cidade $request->name editada com sucesso!");

        return redirect('counties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\County  $county
     * @return \Illuminate\Http\Response
     */
    public function destroy(County $county, Request $request)
    {
        $county::destroy($county->id);

        $aux = $county->name;

        $request->session()->flash('success', "Cidade $aux excluída com sucesso!");

        return redirect('counties');
    }
}
