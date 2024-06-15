<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Mavzu;
class CoursController extends Controller{
    public function CreateCours(Request $request){
        $validated = $request->validate([
            "cours_name" => "required",
            "price" => "required",
            "cours_video" => "required",
            "cours_length" => "required",
            "cours_days" => "required",
            "cours_about" => "required",
            "type" => "required",
            "techer" => "required",
            "cours_text" => "required",
            "cours_image" => "required|file|mimes:jpg,jpeg",
            "techer_image" => "required|file|mimes:jpg,jpeg,png",
            "book" => "required|file|mimes:pdf",
            "test" => "required|file|mimes:pdf",
            "test_javob" => "required|file|mimes:pdf",
            "lugat" => "required|file|mimes:pdf",
        ]);
        $validated['cours_video'] = "https://atko.tech/video/".$request['cours_video'];
        $path = "file/image/banner/";
        if($request->hasfile('cours_image')){
            $file = $request->file('cours_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = "banner_".time().'.'.$extenstion;
            $file->move($path, $filename);
            $image = $path.$filename;
        }
        $path = "file/image/techer/";
        if($request->hasfile('techer_image')){
            $file2 = $request->file('techer_image');
            $extenstion2 = $file2->getClientOriginalExtension();
            $filename2 = "techer_".time().'.'.$extenstion2;
            $file2->move($path, $filename2);
            $techer_image = $path.$filename2;
        }
        $path = "file/book/";
        if($request->hasfile('book')){
            $file3 = $request->file('book');
            $extenstion3 = $file3->getClientOriginalExtension();
            $filename3 = "book_".time().'.'.$extenstion3;
            $file3->move($path, $filename3);
            $book = $path.$filename3;
        }
        $path = "file/test/";
        if($request->hasfile('test')){
            $file4 = $request->file('test');
            $extenstion4 = $file4->getClientOriginalExtension();
            $filename4 = "test_".time().'.'.$extenstion4;
            $file4->move($path, $filename4);
            $test = $path.$filename4;
        }
        $path = "file/javob/";
        if($request->hasfile('test_javob')){
            $file5 = $request->file('test_javob');
            $extenstion5 = $file5->getClientOriginalExtension();
            $filename5 = "javob_".time().'.'.$extenstion5;
            $file5->move($path, $filename5);
            $test_javob = $path.$filename5;
        }
        $path = "file/lugat/";
        if($request->hasfile('lugat')){
            $file6 = $request->file('lugat');
            $extenstion6 = $file6->getClientOriginalExtension();
            $filename6 = "lugat_".time().'.'.$extenstion6;
            $file6->move($path, $filename6);
            $lugat = $path.$filename6;
        }
        $validated['cours_id'] = time();
        $validated['cours_image'] = $image;
        $validated['techer_image'] = $techer_image;
        $validated['book'] = $book;
        $validated['test'] = $book;
        $validated['test_javob'] = $test_javob;
        $validated['lugat'] = $lugat;
        $Cour = Cours::create($validated);
        return redirect()->route('admin.cours')->with('success','Yangi kurs qo\'shildi.');
    }

    public function UpdateCours($id){
        $cours = Cours::find($id);
        return view('admin.update', ['cours'=>$cours]);
    }

    public function EditCours(Request $request, $id){
        $validated = $request->validate([
            "cours_name" => "required",
            "price" => "required",
            "cours_video" => "required",
            "cours_length" => "required",
            "cours_days" => "required",
            "cours_about" => "required",
            "type" => "required",
            "techer" => "required",
            "cours_text" => "required"
        ]);
        $cours = Cours::find($id);
        $cours -> update($validated);
        return redirect()->route('admin.cours')->with('success','Kurs yangilandi.');
    }
    public function EditCoursImage(Request $request, $id){
        $validated = $request->validate([
            "cours_image" => "required|file|mimes:jpg,jpeg"
        ]);
        $path = "file/image/banner/";
        if($request->hasfile('cours_image')){
            $file = $request->file('cours_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = "banner_".time().'.'.$extenstion;
            $file->move($path, $filename);
            $image = $path.$filename;
        }
        $validated['cours_image'] = $image;
        $cours = Cours::find($id);
        $cours -> update($validated);
        return $this->CoursShow($id);
    }
    public function EditCourstecher(Request $request, $id){
        $validated = $request->validate([
            "techer_image" => "required|file|mimes:jpg,jpeg"
        ]);
        $path = "file/image/techer/";
        if($request->hasfile('techer_image')){
            $file = $request->file('techer_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = "banner_".time().'.'.$extenstion;
            $file->move($path, $filename);
            $image = $path.$filename;
        }
        $validated['techer_image'] = $image;
        $cours = Cours::find($id);
        $cours -> update($validated);
        return $this->CoursShow($id);
    }
    // Book
    public function EditCoursBook(Request $request, $id){
        $validated = $request->validate([
            "book" => "required|file|mimes:pdf",
        ]);
        $path = "file/book/";
        if($request->hasfile('book')){
            $file = $request->file('book');
            $extenstion = $file->getClientOriginalExtension();
            $filename = "banner_".time().'.'.$extenstion;
            $file->move($path, $filename);
            $image = $path.$filename;
        }
        $validated['book'] = $image;
        $cours = Cours::find($id);
        $cours -> update($validated);
        return $this->CoursShow($id);
    }
    // test
    public function EditCoursTest(Request $request, $id){
        $validated = $request->validate([
            "test" => "required|file|mimes:pdf",
        ]);
        $path = "file/test/";
        if($request->hasfile('test')){
            $file = $request->file('test');
            $extenstion = $file->getClientOriginalExtension();
            $filename = "banner_".time().'.'.$extenstion;
            $file->move($path, $filename);
            $image = $path.$filename;
        }
        $validated['test'] = $image;
        $cours = Cours::find($id);
        $cours -> update($validated);
        return $this->CoursShow($id);
    }
    // javob
    public function EditCoursJavob(Request $request, $id){
        $validated = $request->validate([
            "test_javob" => "required|file|mimes:pdf",
        ]);
        $path = "file/javob/";
        if($request->hasfile('test_javob')){
            $file = $request->file('test_javob');
            $extenstion = $file->getClientOriginalExtension();
            $filename = "banner_".time().'.'.$extenstion;
            $file->move($path, $filename);
            $image = $path.$filename;
        }
        $validated['test_javob'] = $image;
        $cours = Cours::find($id);
        $cours -> update($validated);
        return $this->CoursShow($id);
    }
    // lugat
    public function EditCoursLugat(Request $request, $id){
        $validated = $request->validate([
            "lugat" => "required|file|mimes:pdf",
        ]);
        $path = "file/lugat/";
        if($request->hasfile('lugat')){
            $file = $request->file('lugat');
            $extenstion = $file->getClientOriginalExtension();
            $filename = "banner_".time().'.'.$extenstion;
            $file->move($path, $filename);
            $image = $path.$filename;
        }
        $validated['lugat'] = $image;
        $cours = Cours::find($id);
        $cours -> update($validated);
        return $this->CoursShow($id);
    }

    public function CoursShow($id){
        $cours = Cours::find($id);
        $Mavzular = Mavzu::where('cours_id','=',$cours->cours_id)->orderBy('mavzu_number', 'asc')->get();
        return view('admin.cours-show', ['cours'=>$cours,'Mavzular'=>$Mavzular] );
    }

    public function destroy($id){
        $Cours=Cours::find($id);
        $Cours->delete();
        return redirect()->route('admin.cours')->with('tashsuccess','Kurs o\'chirildi.');
    }
}
