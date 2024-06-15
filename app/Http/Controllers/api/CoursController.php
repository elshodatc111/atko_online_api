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
    public function mavzu(Request $cours_id){
        return [
            'cours_id' => $cours_id->cours_id,
            'cours' => Cours::where('cours_id',$cours_id->cours_id)->first(),
            'mavzular' => Mavzu::where('cours_id',$cours_id->cours_id)->get()
        ];
    }
	public function mavzus(Request $req){
		return [
            'mavzu_id' => $req->mavzu_id,
            'mavzu' => Mavzu::where('mavzu_id',$req->mavzu_id)->first()
        ];
	}
}
