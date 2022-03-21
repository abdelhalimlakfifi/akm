<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domains = Domain::all();
        return view('pages/admin_pages/articles', ['domains' => $domains]);
    }


    public function store(Request $request)
    {
        // $name = $request->file('principle_image')->getClientOriginalName();
        //dd($request->file('principleImage'), $request->file('files'), $request->all());
        
        $now = date('_Y_m_d_H_i_s');
        $title = $request->title;
        $filesPath = str_replace(' ','_',$title).$now;
        //dd($request->file('principleImage'));
        $request->file('principleImage')
                ->storeAs('articles/'.$filesPath.'/principle',$request->file('principleImage')->getClientOriginalName());

        if(intval($request->totalFiles) > 0)
        {
            for($i = 0; $i < intval($request->totalFiles); $i++)
            {
                if($request->hasFile('files'.$i))
                {
                    dump($request->file('files'.$i));
                }
            }
            dd(1);
        }
        //dd($request->file('files'));
        
        foreach($request->file('files') as $file)
        {
            $file->storeAs('articles/'.$filesPath , $file->getClientOriginalName());
        }
        
        $article = new Article;
        $article->titre = $request->title;
        $article->file_path = $filesPath;
        $article->content = $request->contentTextArea;
        $article->user_id = Auth::id();
        $article->domain_id = intval($request->domain);
        $article->save();

        // return view()
    }


    public function create()
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
