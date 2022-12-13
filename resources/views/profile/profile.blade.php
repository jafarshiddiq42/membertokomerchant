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
                        <img class="img-account-profile  mb-2"
                            src="data:image/png;base64,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"
                            alt="" />
                    </div>
                </div>
                {{-- qrcode --}}
                <div class="card my-4 mb-xl-0">
                    <div class="card-header">Qr-Code</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile rounded-circle mb-2"
                            src="assets/img/illustrations/profiles/profile-1.png" alt="" />
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
