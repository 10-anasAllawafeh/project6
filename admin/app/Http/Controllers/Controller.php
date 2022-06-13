<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function render(){
        return view('approve');
    }

    public function aprrove(Request $request){
        $callData = DB::select('SELECT * from users where hold = 1');
        $user=$request->input('user_id');
        $service=$request->input('service_id');
        // dd($service);

        if (empty($calldata)) {
            foreach($callData as $data){
                if($user = $data->id && $service = $data->service){
                    $id=$data->id;
                    // dd($id);
                    DB::insert('INSERT INTO user_services (user_id,service_id) VALUES (?,?)',[$id,$service]);
                    $rollback= User::find($user);
                    DB::update('UPDATE users SET hold = 0,service="null" WHERE id = ?',[$id]);
                    $Data=[
                        'name' => $data->name,
                        'email' => $data->email,
                    ];
                    mail::send('mail.approved', $Data, function($message) use($Data){
                        $message->to($Data['email']);
                        $message->from('greenland@support.com');
                        $message->subject('Approved!');
                    });
                    return redirect('/admin/approve')->with('message','Approved Successfully');
                }
                else {
                    return redirect('/admin/approve')->with('message','Wrong Data input');
                }
            }
        }
        else{
            return redirect('/admin/approve')->with('message','No Applications found');
        }
    }

    public function dashboard(){
        return view('dashboard');
    }
}
