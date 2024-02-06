<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Information;


class informationController extends Controller
{
    public function index()
    {
        $data = [];
        $data['row'] = DB::table('biodata')->get();
        return view('index', compact('data'));
    }

    public function store(Request $request)
    {
        
        $model = new Information();

        $model->name = $request->name;
        $model->age = $request->age;
        $model->education = $request->education;
        $model->email = $request->email;
        $model->status=$request->status? true:false;
        // dd($model);

        if($request->hasFile('image_data')){
            // foreach ($request->file('image_data') as $file)
            {
            $file = $request->file('image_data');
            $image = time() .'.'. $file->getClientOriginalExtension();
            $destinationPath = 'public_path'('uploads/');
            $file->move($destinationPath, $image);
        }
        $model->image_data=$image;
        $success = $model->save();
        if ($success) {
            return redirect()->route('information.index');
        }
    }
}
    public function view(){
        return view('view');
    }
    public function signup(){
        return view('signup');
    }
}

