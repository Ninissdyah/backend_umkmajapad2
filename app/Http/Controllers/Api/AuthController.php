<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
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
        
        return response()->json([
            'message' => 'Successfully created user'
        ]);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
        
    }

    public function logout(Request $request) {
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }
}