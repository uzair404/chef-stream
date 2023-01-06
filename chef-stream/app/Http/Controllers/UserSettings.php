<?php

namespace App\Http\Controllers;

use App\Models\UserSettings as ModelsUserSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSettings extends Controller
{
    //
    public function create_empty_setting(){
        $UserSettings = new ModelsUserSettings();
        $UserSettings->dp_file = 'file_name';
        $UserSettings->fname = Auth::user()->name;
        $UserSettings->lname = '';
        $UserSettings->email = Auth::user()->email;
        $UserSettings->phone = '';
        $UserSettings->age = '';
        $UserSettings->education_qualificaion = 'eq';
        $UserSettings->cerificate = '';
        $UserSettings->experience = '';
        $UserSettings->bio = '';
        $UserSettings->user_id = Auth::user()->id;
        $UserSettings->save();
        
    }
    public function index(){
        $UserSettings = ModelsUserSettings::where('user_id', Auth::user()->id)->first();
        if(!$UserSettings){
            $this->create_empty_setting();
        }
        $data['settings'] = $UserSettings;
        return view('chef-dashboard.setting')->with($data); 
    }
    public function update(Request $request){
        $request->validate([
            'dp_file' => 'max:4048|image',
            "fName" => "required|max:100",
            "lName" => "required|max:100",
            "email" => "required|email",
            "phone" => "required|numeric",
            "age" => "required|max:100",
            "eq" => "required|max:100",
            "cert" => "required|max:100",
            "exp" => "required|max:1000",
            "bio" => "required|max:1000"
        ]);

        $user_id = Auth::user()->id;
        $UserSettings = ModelsUserSettings::where('user_id', $user_id)->first();

        if (!$UserSettings) {
            $UserSettings = new ModelsUserSettings();
        }
        
        if($request->dp_file){
            $file_name = time().'dp.'.$request->dp_file->getClientOriginalExtension();
            $request->dp_file->move(public_path('uploads/usersdp'), $file_name);
            $UserSettings->dp_file = $file_name;
        }

        $UserSettings->fname = $request->fName;
        $UserSettings->lname = $request->lName;
        $UserSettings->email = $request->email;
        $UserSettings->phone = $request->phone;
        $UserSettings->age = $request->age;
        $UserSettings->education_qualificaion = $request->eq;
        $UserSettings->cerificate = $request->cert;
        $UserSettings->experience = $request->exp;
        $UserSettings->bio = $request->bio;
        $UserSettings->user_id = $user_id;
        $UserSettings->save();
        return redirect()->back()->with('success', 'Settings Saved!');
    }
}
