<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mavzu;
use App\Models\Cours;
class MavzuController extends Controller
{
    public function createMavzu(Request $request){
        $Cours = Cours::find($request->id);
        $cours_id = $Cours->cours_id;
        $validated = $request->validate([
            "mavzu_name" => "required",
            "mavzu_video" => "required",
            "mavzu_length" => "required",
            "mavzu_number" => "required",
            "mavzu_text" => "required",
        ]);
        $link = "https://atko.tech/video/";
        $validated['mavzu_video'] = $link.$request['mavzu_video'];
        $validated['cours_id'] = $cours_id;
        $validated['mavzu_id'] = time();
        
        $Mavzu = Mavzu::create($validated);
        return redirect()->route('admin.cours.show', $request->id)->with('success','Yangi mavzu qo\'shildi.');
    }
    public function showMavzu($cours_id, $id){
        $Mavzu = Mavzu::find($id);
        $Cours = Cours::where('cours_id', $cours_id)->get()->first();
        $Mavzular = Mavzu::where('cours_id','=',$cours_id)->orderBy('mavzu_number', 'asc')->get();
        return view('admin.mavzu.mavzu-show',['Mavzu'=>$Mavzu, 'Cours'=>$Cours, 'Mavzular'=>$Mavzular]);
    }
    public function editMavzu(Request $request, $id){
        $validated = $request->validate([
            "mavzu_name" => "required",
            "mavzu_video" => "required",
            "mavzu_length" => "required",
            "mavzu_number" => "required",
            "mavzu_text" => "required",
        ]);
        $cours = Mavzu::find($id);
        $cours -> update($validated);
        return $this->showMavzu($request->cours_id ,$id);
    }
    public function destroy($id){
        $Mavzu=Mavzu::find($id);
        $cours_id = $Mavzu->cours_id;
        $cours = Cours::where('cours_id','=',$cours_id)->get()->first();
        $idd = $cours->id;
        $Mavzu->delete();
        return redirect()->route('admin.cours.show', $idd )->with('tashsuccess','Kurs mavzusi o\'chirildi.');
    }
}
