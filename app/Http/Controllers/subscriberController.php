<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;
use App\Models\Guest;
use App\Models\Subscribing;
use Illuminate\Support\Facades\Validator;
use Response;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Auth;
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
        
        dd($request->all(), $request->checkedValues, explode(',',$request->checkedValues));
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

        $idConfig = [
            "table"     =>  "guests",
            "length"    =>  10,
            "prefix"    =>  'AKM-01-'
        ];

        $numOfMonth = $request->numOfMonths;
        $numOfMonth = intval($numOfMonth);
        //$expirationDate = Carbon::now()->addMonths($numOfMonth)->toDateTimeString();
        $expirationDate = Carbon::now()->addMonths($numOfMonth);
        $id  =  IdGenerator::generate($idConfig);
        $guest                  =   new Guest;
        $guest->id              =   $id;
        $guest->name            =   $request->fullname;
        $guest->email           =   $request->email;
        $guest->gender          =   $request->sex;
        $guest->phone           =   $request->phone;
        $guest->cin             =   $request->cin;
        $guest->price           =   $request->price;
        $guest->birthday        =   $request->birthday;
        $guest->image_path      =   $image;
        $guest->expiration_date =   $expirationDate;
        $guest->is_subscriber   =   1;
        $guest->user_id         =   Auth::id();
        $guest->save();

        foreach(explode(',',$request->checkedValues) as $domain){
            $subscribing = new Subscribing;
            $subscribing->guest_id  =   $id;
            $subscribing->domain_id = Auth::id();
            $subscribing->save();
        }

        return response()->json($guest);
        
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
