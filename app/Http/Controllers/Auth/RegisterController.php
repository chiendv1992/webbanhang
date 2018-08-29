<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   
    use RegistersUsers;

    protected $redirectTo = '/home';

    
    public function __construct()
    {
        $this->middleware('guest');
    }

   public function index()
   {
    return view('backend.auth.register');
   }
   public function store(Request $request)
    {
        $this-> validate($request,
            [
                'username'=>'required',
                'email'=>'required|email',
                'password'=>'required|min:8',
            ],
            [
                'username.required' =>' Bạn Chưa Nhập Tên',
                'email.required' =>' Bạn Chưa email',
                'email.email' =>' Email Không Đúng Định Dạng',
                'password.required' =>' Bạn Chưa Mật Khẩu',
                'password.min' =>' Mật Khẩu Ít Nhất Là 8 Ký Tự'
            ]);


        $user = User::where('email',$request->email)->first();

        // Check username available

        if(isset($user)){
            $errors = new MessageBag(['email' => 'Email đã tồn tại']);
            return redirect()->back()->withInput()->withErrors($errors);
        }

        $users = new User();
        $users->name = $request->username;
        $users->email = $request->email;
        $users->password =bcrypt($request->password);
        $users->level = 1;       
        $users->save();
        return redirect('backend/auth/login')->with('success','You have registered successfully');
    }
    protected function validator(array $data)
    {
        // return Validator::make($data, [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6|confirmed',
        // ]);
    }

    
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
