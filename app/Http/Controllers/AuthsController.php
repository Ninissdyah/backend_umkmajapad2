<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AuthsController extends Controller
{

    public function register(Request $request) {
        $data= $request->all();
        DB::beginTransaction();

        $vendor = new Vendor;
        $vendor->name = $data['name'];
        $vendor->email = $data['email'];
        $vendor->status = 0;
        $vendor->save();

        $vendorId = DB::getPdo()->lastInsertId();

        $user = new User;
        $user->type = 'vendor';
        $user->vendorId = $vendorId;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->status = 0;
        $user->save();

        DB::commit();
        return view('auth.login')->with(['regist' => 'You have successfully created an account! Please Login!']);
    }

    public function login(Request $request) {

        return view('auth.register');
    }

    function authenticated(Request $request, $vendor)
    {
        $vendor->last_login_at = Carbon::now()->toDateTimeString();
        $vendor->save();
    }
}