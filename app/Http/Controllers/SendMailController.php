<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        dispatch(new SendMailJob($data));
        return redirect()->route('/')->with(['berhasil' => 'Email has been send']);
    }
}
