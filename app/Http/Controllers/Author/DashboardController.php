<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class DashboardController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $key = Auth::user()->license_key;
        if($key){
            $data['license_key'] = Crypt::decryptString($key);
        }else{
            $data['license_key'] = 'Please Contact Admin***';
        }
        $data['data'] = User::findorfail($id);
        return view('welcome')->with($data);
    }

    // active key 
    public function activeKey(){
        $id = Auth::user()->id;
        $key = Auth::user()->license_key;
        if($key){
            $data['license_key'] = Crypt::decryptString($key);
        }else{
            $data['license_key'] = 'Please Contact Admin***';
        }
        $data['data'] = User::findorfail($id);
        return view('active-key')->with($data);
    }

    // activeKeyStore 
    public function activeKeyStore(request $request){  
        $id = Auth::user()->id;
        $user = User::findorfail($id);
        $expire_date = date('d/m/y', strtotime($user->expire_date));
        if($user->active_key == 0){            
            $license_key = $request->license_key;
            $db_license_key = $user->license_key;
            $db_decrypted = Crypt::decryptString($db_license_key);
            if($license_key == $db_decrypted ){
                $user = User::where('id', $id)->update(['active_key' => 1]);
                $request->session()->flash('level', 'success');
                $request->session()->flash('msg', 'Congratulations!! Your License Has Been Activated. It will work till '.$expire_date);
            }
            else{
                $request->session()->flash('level', 'danger');
                 $request->session()->flash('msg', 'Your License Key Wrong');
            }
        }
        else{
          $request->session()->flash('level', 'error');
          $request->session()->flash('msg', 'Your License Already Activated. It will work till '.$expire_date);
        }
        return redirect()->to('/');
    }
}
