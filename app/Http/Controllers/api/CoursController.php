<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Mavzu;
class CoursController extends Controller{
    public function index(){
        $Cours = Cours::get();
        return $Cours;
    }
    public function mavzu(Request $request){
        return Mavzu::where('cours_id',$request->cours_id)->get();
    }
}
