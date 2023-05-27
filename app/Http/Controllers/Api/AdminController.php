<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        $id = auth()->guard('admin')->user()->vendorId;
        $users = User::where('vendorId', $id)->first();
        $jumlahProduk = DB::table('dashboards')->count();
        $jumlahBlog = DB::table('blogs')->count();
        return view('admins.dashboard', compact('users', 'jumlahProduk', 'jumlahBlog'));
    }

    public function login(Request $request)
    {   
        if($request->isMethod('post')){
            $data =$request->all();

            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'],
            'status'=>1])){
                return redirect('/admin')->with(['login' => 'You have successfully logged in!']);
            } elseif(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'],
            'status'=>0])){
                return redirect('/dashboard')->with(['login' => 'You have successfully logged in!']);
            }else{
                return redirect()->back()->with(['false' => 'Your password or email is wrong!!']);
            }
        }
        return view('auth.login');
    }

    public function logout()
    {   
        Auth::guard('admin')->logout();
        return redirect('/home');
    }
}
