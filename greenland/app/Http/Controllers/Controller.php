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

    public function home(){
        $data= post::all();
        return view('welcome', compact('data'));
    }

    public function storeImage(Request $request){

        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('/Img'), $filename);
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
        DB::UPDATE('UPDATE users SET hold=1, service=? WHERE id=?',[$service_id,$user_id]);
        // $edit= User::find($user_id);
        // $edit->hold = 1;
        // $edit-> service = $service_id;
        $posts= post::find($service_id);
        // echo $posts['title'];
        $users= User::all();
        // dd($users[4]);
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
        $user->avatar = $request->input('av');
        $user->update();
        return redirect('/home')->with('status','data edited Successfully');

    }

    public function news(Request $request){
        $data=[
            'name' => 'Sir/Madam',
            'email' => $request->input('subscribe'),
        ];
        mail::send('mail.subscribe', $data, function($message) use($data){
            $message->to($data['email']);
            $message->from('greenland@support.com');
            $message->subject('Subscribe to Newsletter');});
            return redirect('/')->with('message','You subscribed to our newsletter successfully');
    }

    //contact function
    public function contact(Request $request){
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('name'),
            'message' => $request->input('message'),
        ];
        mail::send('mail.contact', $data,function($message) use($data){
            $message->to('anasq0q@gmail.com');
            $message->from($data['email']);
            $message->subject($data['subject']);
        });
        return redirect('/contact')->with('message', 'Thank you for contacting us, we will respond to you soon');
    }
}
