<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use App\Http\Requests\DomainStoreRequest;
class CategorieController extends Controller
{
    
    public function index()
    {
        $categories = Domain::all();
        // dd($categories[0]->label);
        return view('pages/admin_pages/categories', ['categories' => $categories]);
    }

    public function create()
    {
        //
    }
    
    public function store(DomainStoreRequest $request)
    {
        //dd(1);
        $validated = $request->validated();
        //dd($validated);
        $categorie = new Domain;
        $categorie->label = $request->label;
        $categorie->description = $request->description;
        $categorie->save();
        return response()->json($categorie);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $domain = Domain::find($id);
        $domain->label = $request->label;
        $domain->description = $request->description;
        $domain->save();
        return response()->json($domain);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Domain::where('id', $id)->delete();
        return "done";
    }
}
