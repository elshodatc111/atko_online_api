<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cours;
use App\Models\Contact;
use App\Models\UserPay;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index(){
        $Order = DB::table('orders')
        ->join('cours', 'orders.cours_id', 'cours.cours_id')
        ->join('users', 'orders.user_id', 'users.user_id')
        ->select('cours.cours_name','users.name','users.phone','orders.price','orders.updated_at','orders.status')
        ->get();
        $user = User::get();
        $cour = Cours::get();
        $pay = UserPay::get();
        $static = array();
        $static['kurslar'] = count($cour);
        $static['users'] = count($user);
        $static['sotuv'] = count($pay);
        return view('admin.index',['Order'=>$Order,'static'=>$static]);
    }
    public function person(){
        $users = User::get();
        return view('admin.person',['users'=>$users]);
    }
    public function personShow($id){
        $user = User::where('id','=',$id)->get()->first();
        $user_id = $user->user_id;
        $courses = Cours::get();
        $cours = DB::table('user_pays')
        ->join('cours', 'cours.cours_id', '=', 'user_pays.cours_id')
        ->where('user_pays.user_id','>=',$user_id)
        ->select('cours.cours_name','user_pays.end', 'user_pays.created_at')
        ->get();
        return view('admin.person-show', ['cours'=>$cours, 'user'=>$user, 'courses'=>$courses ]);
    }
    public function personCoursPlus(Request $request){
        $validated = $request->validate([
            "user_id" => "required",
            "cours_id" => "required",
            "end" => "required",
        ]);
        $validated['end'] = $request->end." 23:59:59";
        $Contact = UserPay::create($validated);
        return $this->personShow($request->id);
        
    }
    public function messege(){
        $Contact = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.messege',['Contact'=>$Contact]);
    }public function admin_cours(){
        $Cours = Cours::get();
        return view('admin.cours',['Cours'=>$Cours]);
    }
}
