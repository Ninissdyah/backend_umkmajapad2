<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Dashboard;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs = Blogs::where('imagePath', '!=','')->whereNotNull('imagePath')->orderBy('created_at',
        'desc')->paginate(3);
        $store = Dashboard::where('imagePath', '!=','')->whereNotNull('imagePath')->orderBy('created_at',
        'desc')->paginate(4);
        return view('home', compact('blogs', 'store'));
    }

    public function send(Request $request){
        $request->validate([
            'pesan'=>'required'
        ]);
        if($this->isOnline()){
            $mail_data = [
                'recepient'=>'noreply.umkmaja@gmail.com',
                'fromEmail'=>'test.umkmaja@gmail.com',
                'subject'=>$request->subject
            ];

            Mail::send($mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from('test.umkmaja@gmail.com')
                        ->subject($mail_data['subject']);
            });
            return redirect()->back()->with('success');
        }else{
            return redirect()->back()->withInput()->with('error');
        }
    }

    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }

    }
    
}
