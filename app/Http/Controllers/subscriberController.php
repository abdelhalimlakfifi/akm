<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
class subscriberController extends Controller
{

    public function index()
    {
        return view('pages/admin_pages/abonnements');
    }

    
    public function index_add()
    {   
        $domains = Domain::all();
        $domains = $domains->chunk(2);
        foreach ($domains as $key => $chunk) {
            $domains[$key] = array_values($chunk->toArray());
        }
        //dd($domains);
        
        return view('pages/admin_pages/addAbonnement', ["domains" => $domains, "index" => 0]);
    }


    public function index_update()
    {
        return view('pages/admin_pages/updateAbonnement');
    }
    

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
