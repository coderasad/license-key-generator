<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){        
        $user = User::where('role_id', 2)->get();
        return view('pages.index', compact('user'));
    }

    // create license 
    public function createLicense(){
        return view('pages.create-license');
    }

    // user view api 
    public function storeLicense(Request $request){
        $uId = $request->uid;
        $user = User::findorfail($uId);
        if($user->license_key == ''){
            $data = [
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
                'org' => $user->org,
                'street' => $user->street,
                'city' => $user->city,
                'mobile' => $user->mobile,
                'email' => $user->email
            ];
        }
        else{
            $data = "Already License key created";
        }
        
        return response()->json($data);
    }
    
    // License Key api
    public function licenseKey(Request $request){
        $data = rand(1111111111111111,9999999999999999);
        if(  preg_match( '/(\d{4})(\d{4})(\d{4})(\d{4})$/', $data,  $matches ) )
        {
            $rand = $matches[1] . '-' .$matches[2] . '-' . $matches[3] . '-' . $matches[4];
        }
        
        $encrypted = Crypt::encryptString($rand);
        $decrypted = Crypt::decryptString($encrypted);
        $uId = $request->uid;
        $get_date = $request->expire_date;     
        $expire_date = Carbon::now()->addMonths($get_date);
        $user = User::where('id', $uId)->update(['license_key' => $encrypted, 'expire_date' => $expire_date ]);

        if($user){
            $data = [
                'decrypted' => $decrypted,
            ];
        } 
        return response()->json($data);
    }
}