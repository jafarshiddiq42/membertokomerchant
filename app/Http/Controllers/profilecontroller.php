<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Kategori;
use App\Models\Merchant;
use App\Models\Subkategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class profilecontroller extends Controller
{
    //

    // public function profile()
    // {
    //     QrCode::generate('hu');
    // }
    public function profile()
    {
        $profiledata = Merchant::findorfail(Auth::user()->id);
        $kategori = Kategori::find($profiledata->idkategori);
        $subkategori = Subkategori::find($profiledata->idsubkategori);
        return view('profile.profile',compact('profiledata','kategori','subkategori'));
        // return view('profile.profile');
        // echo 'hashi';
    }


    // reset password
    public function oldpassverification(Request $request)
    {
        $oldpassword =$request->oldpass;
        if ( Hash::check($oldpassword, Auth::user()->password)) {
            return view('profile.reset');
        }
        else {
            // Auth::logout();
            echo 'gagal';
            
        }
    }
    public function reset(Request $request)
    {
        // $validated = $request->validate([
        //     'passw' => 'required|min:8',
        // ]);
        $password = Merchant::find(Auth::user()->id);
        $password->password = Hash::make($request->pass);
        $password->save();
        return view('profile.resetsuccess');
       
    }
    public function resetc()
    {
        Auth::logout();
        return redirect('/login');
    }
}
