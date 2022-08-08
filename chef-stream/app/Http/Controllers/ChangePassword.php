<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Auth;

class ChangePassword extends Controller
{
    //
   
    public function index(){
        return view('chef-dashboard.password');
    }
    
    public function change(request $request){
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route('passwordpage'));

    }
}
