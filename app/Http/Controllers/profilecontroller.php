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
    public function oldpassverification(Request $request)
    {
        $oldpassword =$request->oldpass;
        if ( Hash::check($oldpassword, Auth::user()->password)) {
            echo 'berhasil';
        }
        else {
            // Auth::logout();
            echo 'gagal';
            
        }
    }
}
