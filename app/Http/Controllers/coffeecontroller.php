<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\coffee;

class coffeecontroller extends Controller
{

    
    function add(Request $req)
    {
        // $image = $req->file('images');
        // $extension = $image->getClientOriginalExtension();
        // $filename = '/storage/images/'.time().'.'.$extension;
        // $path = $image->storeAs(public_path('images'), $filename);

        // $req->validate([
        //     'images' => 'required|mimes:pdf,doc,docx,jpeg,png|max:2048',
        // ]);
    
        $file = $req->file('images');
        if ($file && $file->isValid()) {
            // The file was uploaded, process it
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
        }
        $cus = new coffee;
        $cus->title = $req->title;
        $cus->pic_image = $filename;
        $cus->prix = $req->prix;
        $cus->description = $req->description;
        $cus->Start_date = $req->dated;
        $cus->end_date = $req->datef;
        $cus->save();

        return redirect('index');
    }

    public function show(Request $request)
    {
        $coffeeData = coffee::select("*")->orderby("id","ASC")->get();

        return view('index', ['data' => $coffeeData]);
    }

    public function show1(Request $request)
    {
        $coffeeData = coffee::select("*")->orderby("id","ASC")->get();

        return view('/klassy-cafe.index', ['data' => $coffeeData]);
    }


    public function edit($id){
        $data = coffee::find($id);
        return response()->json($data);
    }

    public function show_id($id){
        $data = coffee::find($id);
        return response()->json($data);
    }

    public function update(Request $req)
    {
        $id = $req->id_edit;
        $coffee = coffee::find($id);

        $image = $req->file('image_pro');
        if(!empty($image))
        {
            $extension = $image->getClientOriginalExtension();
            $filename = '/storage/images/'.time().'.'.$extension;
            $path = $image->storeAs('public/images', $filename);
            $coffee->pic_image = $filename;
            $coffee->title = $req->title1;
            $coffee->prix = $req->prix1;
            $coffee->description = $req->description1;
            $coffee->Start_date = $req->dated1;
            $coffee->end_date = $req->datef1;
        }
        else
        {
            $coffee->title = $req->title1;
            $coffee->prix = $req->prix1;
            $coffee->description = $req->description1;
            $coffee->Start_date = $req->dated1;
            $coffee->end_date = $req->datef1;
        }

        $coffee->update();

        return redirect('index');
    }

    public function delete(Request $req)
    {
        $id = $req->idd4;

        $coffee = coffee::find($id);

        $coffee->delete();

        return redirect('index');
        // var_dump ($id);
        // echo "mohamed";
    }


}
