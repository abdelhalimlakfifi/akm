<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
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
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'label' => 'required|unique:domains,deleted_at,NULL'
        ],
        [
            'label.required' => 'المرجو إدخال إسم الشعبة',
            'label.unique' => 'شعبة موجودة من قبل'
        ]
        );

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
