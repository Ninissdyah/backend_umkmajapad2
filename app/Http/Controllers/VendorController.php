<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Admin;
use App\Models\User;
use DB;

class VendorController extends Controller
{
    public function loginRegister(){
        return view('auth.register');
    }

    public function vendorRegister(Request $request){
        $data= $request->all();
        DB::beginTransaction();

        $vendor = new Vendor;
        $vendor->name = $data['name'];
        $vendor->email = $data['email'];
        $vendor->status = 0;
        $vendor->save();

        $vendorId = DB::getPdo()->lastInsertId();

        $admin = new Admin;
        $admin->type = 'vendor';
        $admin->vendorId = $vendorId;
        $admin->name = $data['name'];
        $admin->email = $data['email'];
        $admin->password = bcrypt($data['password']);
        $admin->status = 0;
        $admin->save();

        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        DB::commit();
        return view('auth.login')->with(['regist' => 'You have successfully created an account! Please Login!']);
    }

    public function reset(Request $request){
        $data= $request->all();
        $email = $data['email'];

        $admin = Admin::where('email', $email)->get()->toArray();
        $id1 = $admin[0]['id'];
        $admin = Admin::find($id1);
        $admin->password = bcrypt($data['password']);
        $admin->update();

        $user = User::where('email', $email)->get()->toArray();
        $id2 = $user[0]['id'];
        $user = User::find($id2);
        $user->password = bcrypt($data['password']);
        $user->update();

        return view('auth.login')->with(['berhasil' => 'You have successfully change your password! Please Login!']);
        
    }
}
