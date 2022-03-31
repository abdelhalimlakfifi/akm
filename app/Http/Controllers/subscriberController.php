<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use Illuminate\Support\Facades\Validator;
use Response;
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
        $validator = Validator::make($request->all(), [
                'fullname'      =>  'required',
                'phone'         =>  'required',
                'cin'           =>  'required',
                'sex'           =>  'required',
                'birthday'      =>  'required',
                'price'         =>  'required',
                'numOfMonths'   =>  'required'
        ],[
            'fullname.required' =>  'يتطلب الاسم الكامل',
            'phone.required'    =>  'يتطلب رقم الهاتف',
            'cin.required'      =>  'يتطلب رقم البطاقة الوطنية',
            'sex.required'      =>  'المرجو إختيار الجنس',
            'birthday.required' =>  'يتطلب تاريخ الازدياد',
            'price.required'    =>  'يتطلب المساهمة الشهرية',
            'numOfMonths'       =>  'يتطلب عدد الشهور المؤداة',
        ]);
        if($validator->fails())
        {
            return Response::json([
                'success'   =>  false,
                'errors'    =>   $validator->getMessageBag()->toArray()
            ], 400);
        }
        dd($request->all());
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
