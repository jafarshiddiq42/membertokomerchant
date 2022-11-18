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
    //view profil    
    public function profile()
    {
        $profiledata = Merchant::findorfail(Auth::user()->id);
        $kategori = Kategori::find($profiledata->idkategori);
        $subkategori = Subkategori::find($profiledata->idsubkategori);
        return view('profile.profile',compact('profiledata','kategori','subkategori'));
    }
    // reset password
    public function oldpassverification(Request $request)
    {
        $oldpassword =$request->oldpass;
        if ( Hash::check($oldpassword, Auth::user()->password)) {
            return view('profile.reset');
        }
        else {
            echo 'gagal';
        }
    }
    // reset
    public function reset(Request $request)
    {
        $password = Merchant::find(Auth::user()->id);
        $password->password = Hash::make($request->pass);
        $password->save();
        return view('profile.resetsuccess');
       
    }
    // berhasil reset
    public function resetc()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function edit()
    {
        $profiledata = Merchant::findorfail(Auth::user()->id);
        $kategoris = Kategori::all();
        $subkategoris = Subkategori::all();
        return view('profile.profile_edit',compact('profiledata','kategoris','subkategoris'));
    }
    public function save(Request $request)
    {
        $profiledata = Merchant::findorfail(Auth::user()->id);
        $profiledata->nama_merchant = $request->nama_merch;
        $profiledata->idkategori = $request->kategori_merch;
        $profiledata->idsubkategori = $request->subkategori_merch;
        $profiledata->idsubkategori = $request->subkategori_merch;
        $profiledata->keterangan = $request->keterangan_merch;
        $profiledata->telp = $request->telp_merch;
        $profiledata->save();
        return redirect('/profile');
        // dd($request);    
    }
}
