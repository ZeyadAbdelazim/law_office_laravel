<?php

namespace App\Http\Controllers;
use Illuminate\Http\Controllers\articales\store;
use App\Http\Requests\articaleStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class articales extends Controller
{
    public function list(){
        $articales=DB::table('articales')->get();
        return view("articales.list",compact("articales"));
    }
    public function element($id){
        $articales=DB::table('articales')->find($id);
        return view("articales.element",compact("articales"));
    }
    public function create(){
        return view("articales.create");
    }

    public function store(Request $request){
        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
        }
        $image_name =time() . $image->getClientOriginalName();
        $image->move(public_path() . '/images/imgArticales', $image_name);
        
        $articales=DB::table('articales')->insert([
            "title"=>$request->title,
            "description"=>$request->description,
            "auther"=>$request->auther,
            "image"=>$image_name
        ]);
        return redirect("articales/list");
    
        }

    
        
        /* $emp = new Employee();
        $emp->name = $request->input('empName');
        $emp->salary = $request->input('empSalary');

        $image = $request->file('image_data');
        $image_name =time() . $image->getClientOriginalName();
        $image->move(public_path() . '/imgs/', $image_name);

        $emp->img =  $image_name ;
        $emp->save();
        return redirect('employee')->with("done", "Done Insert To DataBase"); */
    

        /*  $articales=DB::table('articales')->insert([
            "title"=>$request->title,
            "description"=>$request->description,
            "auther"=>$request->auther,
            "image"=>$request->image
        ]); */

    
    public function edit($id){
        $articales=DB::table('articales')->find($id);
        return view('articales.update',compact("articales"));

    }
    public function update(request $request ){
        
        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
        }
        $image_name =time() . $image->getClientOriginalName();
        $image->move(public_path() . '/images/imgArticales', $image_name);

        $request->validate([
        ]);

        $articales=DB::table('articales')->where("id",$request->id)->update([
            "title"=>$request->title,
            "description"=>$request->description,
            "auther"=>$request->auther,
            "image"=>$image_name
            ]);
        return redirect("articales/list");
    }
    
    public function delete($id){
        $articales=DB::table('articales')->delete($id);
        return redirect("articales/list");

    }
}
