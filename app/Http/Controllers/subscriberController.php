<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use Illuminate\Support\Facades\Validator;
use Response;
use Carbon\Carbon;
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
        
        if($request->image == 'undefined'){
            $image = 'undefined';
        } 
        else 
        {
            $now        =   date('_Y_m_d_H_i_s');
            $filepath   =   str_replace(' ', '_', $request->fullname).$now;
            $filepath   =   str_replace(array('\\', '/',':' , '*', '"', "'", ">", "<", "|", '?', '؟'), '_', $filepath);
            //dd($filepath, $request->file('image')->getClientOriginalName());
            $request->file('image')->storeAs('guests/'.$filepath, $request->file('image')->getClientOriginalName());
            $image = $filepath.'/'.$request->file('image')->getClientOriginalName();
            
        }

        $numOfMonth = $request->numOfMonths;
        $numOfMonth = intval($numOfMonth);
        $expirationDate = Carbon::now()->addMonths($numOfMonth);
        
        dd($filepath);
        dd($expirationDate, $numOfMonth);
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
