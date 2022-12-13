@extends('layouts.theme')
@section('content')
    <div class="container-xl px-4 mt-4">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="account-profile.html">Profile</a>
            <a class="nav-link" href="account-billing.html">Banner Promo</a>
            <a class="nav-link" href="account-security.html">Banner Flash-Sale </a>
        </nav>
        <hr class="mt-0 mb-4" />
        <div class="row">
            {{-- foto dan qr --}}
            <div class="col-xl-4">
                {{-- foto --}}
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">                       
                        <img class="img-account-profile  mb-2" style="width: 160px"
                            src="{{ $profiledata->url_gambar }}"
                             />
                    </div>
                </div>
                {{-- qrcode --}}
                <div class="card my-4 mb-xl-0">
                    <div class="card-header">Qr-Code</div>
                    <div class="card-body text-center">
                        
                        <div class="small font-italic text-muted mb-4">
                            <div class="visible-print text-center">
                                {!! QrCode::size(140)->generate(url('profile/' . Hash::make($profiledata->nomor_unik))) !!}
                                {{-- <p>Scan me to return to the original page.</p> --}}
                            </div>
                        </div>
                    
                    </div>
                </div>
                {{-- /qrcode --}}

            </div>
            <div class="col-xl-8">
                <style>
                    .boxnama {
                        border-bottom: 2px solid;
                        margin-bottom: 4px;
                        padding-left: 20px;
                    }
                </style>
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Detail Akun</div>
                    <div class="card-body">
                        <form>
                            {{-- nama merchant --}}
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Nama Merchant</label>
                                <div class="boxnama" style="font-size:28px;">{{ $profiledata->nama_merchant }}</div>
                            </div>
                            {{-- baris kedua --}}
                            {{-- kategori --}}
                            <div class="row gx-2 mb-2">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Kategori</label>
                                    <div class="boxnama" style="">{{ $kategori->kategori }}</div>
                                </div>
                                {{-- subkategori --}}
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Sub-kategori</label>
                                    <div class="boxnama" style="">{{ $subkategori->sub_kategori }}</div>
                                </div>
                            </div>
                            {{-- baris ketiga --}}
                            {{-- paket --}}
                            <div class="row gx-2 mb-2">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName"> <i class="fa-solid fa-box"></i>
                                        Paket</label>
                                    <div class="boxnama" style="">{{ $profiledata->idpaket }}</div>
                                </div>
                                {{-- kosong --}}
                                <div class="col-md-6">
                                </div>
                            </div>
                            {{-- baris keempat --}}
                            <div class="row gx-2 mb-2">
                                {{-- Tanggal daftar --}}
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation"> <i class="fa-regular fa-calendar"></i>
                                        Tanggal Daftar</label>
                                    <div class="boxnama" style="">
                                        {{ date_format(date_create($profiledata->tgldaftar), 'd-m-Y') }}</div>
                                </div>
                                {{-- tanggal akhir --}}
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation"> <i class="fa-regular fa-calendar"></i>
                                        Tanggal Berakhir</label>
                                    <div class="boxnama" style="">
                                        {{ date_format(date_create($profiledata->tglberakhir), 'd-m-Y') }}</div>
                                </div>
                            </div>
                            {{-- baris kelima --}}
                            {{-- email --}}
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress"> <i class="fa fa-inbox"></i> Alamat
                                    Email</label>
                                <div class="boxnama" style="">{{ $profiledata->email }}</div>
                            </div>
                            {{-- baris ke-enam --}}
                            <div class="row gx-2 mb-2">
                                {{-- status --}}
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Status</label>
                                    <div class="boxnama" style="">{{ $profiledata->status }}</div>
                                </div>
                                {{-- keterangan --}}
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Keterangan</label>
                                    <div class="boxnama" style="">{{ $profiledata->keterangan }}</div>
                                </div>
                            </div>
                            {{-- baris ke-tujuh --}}
                            <div class="row gx-2 mb-2">
                                {{--   nomor telepon  --}}
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone"> <i class="fa fa-phone"></i> Nomor
                                        Telepon</label>
                                    <div class="boxnama" style="">{{ $profiledata->telp }}</div>
                                </div>
                                {{-- lokasi --}}
                                <div class="col-md-6">
                                    <div class="row">
                                        {{-- lat  --}}
                                        <div class="col">
                                            <label class="small mb-1" for="inputBirthday">lat</label>
                                            <div class="boxnama" style="">{{ $profiledata->lat1 }}0</div>
                                        </div>
                                        {{-- lng  --}}
                                        <div class="col">
                                            <label class="small mb-1" for="inputBirthday">long </label>
                                            <div class="boxnama" style="">{{ $profiledata->lng1 }}0</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                            <a class="btn  btn-primary" href="/editprofil" >Edit Profil <i style="margin-left: 4px" class="fa fa-pencil"></i></a>
                            </div>
                            <div id='map'></div>
	
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
