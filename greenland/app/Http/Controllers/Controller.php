<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function storeImage(Request $request){

        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/Img'), $filename);
            $filename;
        }
        return redirect('/register')->with('filename',$filename);
    }
    public function viewServices(){
        $data= post::all();
        return view('services', compact('data'));

    }
    // public function callImage(){
    //     $images = DB::table('posts')
    //             ->select(DB::raw("
    //             image")
    //             );
    //     if(!(public_path('public/Img'), $filename)){
    //         $file= $request->file('image');
    //         $filename= $file->getClientOriginalName();
    //         $file-> move(public_path('public/Img'), $filename);
    //         $filename;
    //     }
    //     return redirect('/register')->with('filename',$filename);
    // }
    public function viewvolunteer($service_id){
              $user_id=Auth::user()->id;
              return redirect('/volunteer/'.$service_id.'/user/'.$user_id);
    }
    public function volunteer($service_id,$user_id){
        $posts= post::find($service_id);
        // echo $posts['title'];
        $users= User::all();
        $data = array(
            'name' => $users[$user_id-1]['name'],
            'email' => $users[$user_id-1]['email'],
            'phone' => $users[$user_id-1]['phone'],
            'title' => $posts['title']);
        mail::send('mail.volunteer', $data, function($message) use($data){
        $message->to('anasq0q@gmail.com');
        $message->from($data['email']);
        $message->subject('volunteering');});
        return redirect('/services')->with('message','Your Application sent successfully,please wait for admin approval');
    }
    public function edituser(Request $request,$id){
        $user= User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->city = $request->input('city');
        $user->update();
        return redirect('/home')->with('status','data edited Successfully');

    }

    public function news($id){
        $user= User::find($id);
        $data=[
            'email' => $user[$id-1]['email'],
        ];
        mail::send('mail.volunteer', $data, function($message) use($data){
            $message->to($data['email']);
            $message->subject('Subscribe to Newsletter');});
            return redirect('/services')->with('message','Your Application sent successfully,please wait for admin approval');
    }
}
