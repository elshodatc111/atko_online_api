<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Contact;
use App\Models\Cours;
use App\Models\Order;
use App\Models\User;
use App\Models\UserPay;
use App\Models\Mavzu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    public function __construct(){
        $this->middleware('auth');
    }

     */
    public function index(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function contactCreate(Request $request){
        $validated = $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "text" => "required",
        ]);
        $Contact = Contact::create($validated);
        return redirect()->route('contact');
    }   
    public function cobinet(){
        return view('cobinet');
    }
    
    public function cours(){
        $Cours = Cours::get();

        return view('cours',['Cours'=>$Cours]);
    }
    public function coursIndex($type){
        $Cours = Cours::where('type','=',$type)->get();
        return view('cours-index',['Cours'=>$Cours]);
    }

    public function coursShow($id){
        $Cours = Cours::where('id','=',$id)->get()->first();
        $Mavzular = Mavzu::where('cours_id',$Cours->cours_id)->get();
        $Talabalar = UserPay::where('cours_id',$Cours->cours_id)->get();
        $Static = array();
        $Static['Mavzular'] = count($Mavzular);
        $Static['Talabalar'] = count($Talabalar)+3;
        if(Auth::user()){
            $user_id = Auth::user()->user_id;
            $cours_id = $Cours->cours_id;
            $now = date("Y-m-d H:i:s");
            $UserPay = UserPay::where('user_id','=',$user_id)->where('cours_id','=',$cours_id)->where('end','>=',$now)->first();
            if(empty($UserPay)){
                $Status = 0;
            }else{
                $Status = 1;
            }
        }else{
            $Status = 0;
        }
        
        return view('cours-show',['Cours'=>$Cours,'Status'=>$Status, 'Static'=>$Static]);
    }

    public function coursPay(Request $request){
        $Cours = Cours::where('cours_id',$request->cours_id)->get()->first();
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->cours_id = $request->cours_id;
        $order->days = $Cours->cours_days;
        $order->price = $Cours->price;
        $order->save();
        return view('coursPay',['Cours'=>$Cours,'order_id'=>$order->id]);
    }

    public function mycours(){
        $now = date("Y-m-d")." 00:00:00";
        $cours = DB::table('cours')
        ->join('user_pays', 'cours.cours_id', '=', 'user_pays.cours_id')
        ->where('user_pays.end','>=',$now)
        ->select('cours.cours_name','user_pays.end', 'cours.cours_image', 'cours.cours_about','cours.id','user_pays.user_id')
        ->get();
        return view('mycours', ['cours'=>$cours] );
    }
    public function mycoursShow($id){
        $Cours = Cours::find($id);
        $cours_id = $Cours->cours_id;
        $Mavzu = Mavzu::where('cours_id',$cours_id)->orderBy('mavzu_number', 'asc')->get();
        if(empty($id)){
            return redirect()->route('cours');
        }
        return view('mycours-show', ['Cours'=>$Cours,'Mavzu'=>$Mavzu]);
    }
    public function mycoursShowLessin($cours_id, $id){
        $Cours = Cours::find($cours_id);
        $cours_id = $Cours->cours_id;
        $Mavzular = Mavzu::where('cours_id',$cours_id )->orderBy('mavzu_number','asc')->get();
        $Mavzu = Mavzu::find($id);
        $user_id = Auth::user()->user_id;
        $now = date("Y-m-d H:i:s");
        $UserPay = UserPay::where('user_id','=',$user_id)->where('cours_id','=',$cours_id)->where('end','>=',$now)->first();
        if(empty($UserPay)){
            return redirect()->route('cours');
        }
        return view('mycours-show-learn',['Cours'=>$Cours,'Mavzular'=>$Mavzular,'Mavzu'=>$Mavzu]);
    }
    







    
}
