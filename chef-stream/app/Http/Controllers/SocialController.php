<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect('/dashboard');
    }
    public function loginWithFacebook()
    {
        // echo "hello";
        try {
    
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();
            // dd($isUser);    
            if($isUser){
                // Auth::login($isUser);
                $email = $isUser->email;
                Session::put('fb_email', $email);
                return redirect(route('facebookenterpass'));
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('adminnn@123')
                ]);
                Auth::login($createUser);
                return redirect(route('enternewpass'));
                
                
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
    public function enterpass(){
        // $data['email'] = Auth::user()->email;

        $data['email'] = Session::get('fb_email');
        return view('auth.fbpass')->with($data);
    }
    public function enternewpass(){
        $data['email'] = Auth::user()->email;
        return view('auth.newpass')->with($data);
    }
    public function storenewpass(request $request){
        $request->validate([
            'email' => Auth::user()->email,
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route('dashboard'));
    }
    // public function storepass(request $request){
    //     $request->validate([
    //         'email' => Auth::user()->email,
    //         'password' => ['required', Password::defaults()],
    //     ]);
        
    //     $user_id = Auth::user()->id;
    //     $user = User::find($user_id);
    //     $user->password = Hash::make($request->password);
    //     $user->save();
    //     return redirect(route('dashboard'));
    // }
}