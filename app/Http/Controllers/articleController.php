<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Response;

class articleController extends Controller
{
    public function index()
    {
        $domains = Domain::all();
        return view('pages/admin_pages/articles', ['domains' => $domains]);
    }


    public function store(Request $request)
    {
        // $validated = $request->validated();
        $validator = Validator::make($request->all(),
            [
                "title" => "required",
                "principleImage" => "required|image|mimes:jpg,png,jpeg,gif",
                "contentTextArea" => "required",
                "domainOption" => "required|not_in:0"
            ]
        );
        if ($validator->fails())
        {
            return Response::json([
                'success' => false,
                'errors'    => $validator->getMessageBag()->toArray()
            ], 400);
        } 
        
        $now = date('_Y_m_d_H_i_s');
        $title = $request->title;
        
        $filesPath = str_replace(' ','_',$title).$now;

        $filesPath = str_replace(array('\\', '/',':' , '*', '"', "'", ">", "<", "|", '?', '؟'), '_', $filesPath);
        //dd($filesPath);
        $request->file('principleImage')->storeAs('articles/'.$filesPath.'/principle',$request->file('principleImage')->getClientOriginalName());

        if(intval($request->totalFiles) > 0)
        {
            for($i = 0; $i < intval($request->totalFiles); $i++)
            {
                if($request->hasFile('files'.$i))
                {
                    $request->file('files'.$i)->storeAs('articles/'.$filesPath, $request->file('files'.$i)->getClientOriginalName());
                }
            }
        }

        $article            = new Article;
        $article->titre     = $request->title;
        $article->file_path = $filesPath;
        $article->content   = $request->contentTextArea;
        $article->user_id   = Auth::id();
        $article->domain_id = intval($request->domainOption);
        $article->save();

        return response()->json($article);
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