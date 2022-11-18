@extends('layouts.theme')
@section('content')
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="account-profile.html">Profile</a>
        <a class="nav-link" href="account-billing.html">Banner Promo</a>
        <a class="nav-link" href="account-security.html">Banner Flash-Sale </a>
    </nav>
    <hr class="mt-0 mb-4" />
    <div class="row">
        <div class="col-xl-4">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="" />
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
            <div class="card my-4 mb-xl-0">
                <div class="card-header">Qr-Code</div>
                <div class="card-body text-center">
                    <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="" />
                    <div class="small font-italic text-muted mb-4">
                        <div class="visible-print text-center">
                            {!! QrCode::size(100)->generate(url('profile/'.$profiledata->id)); !!}
                            <p>Scan me to return to the original page.</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">Detail Akun</div>
                <div class="card-body">
                    <form action="/editprofil" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Nama Merchant</label>
                            <input name="nama_merch"  class="form-control " id="inputUsername" type="text" placeholder="Nama Merchant"  value="{{ $profiledata->nama_merchant }}" />
                        </div>
                        <div class="row gx-2 mb-2">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Kategori</label>
                                <select  name="kategori_merch" class="form-control form-control-sm" id="">
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1"  for="inputLastName">Sub-kategori</label>
                                <select name="subkategori_merch" id="" class="form-control form-control-sm">
                                    @foreach ($subkategoris as $subkategori)
                                    <option value="{{ $subkategori->id }}">{{ $subkategori->sub_kategori }}</option>
                                 @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row gx-2 mb-2">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Paket</label>
                                <input disabled class="form-control form-control-sm" id="inputOrgName" type="text" placeholder="Enter your organization name" value="{{ $profiledata->idpaket }}" />                              
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                        <div class="row gx-2 mb-2">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Tanggal Daftar</label>
                                <input type="date" disabled class="form-control form-control-sm" value="{{ date_format(date_create($profiledata->tgldaftar),'Y-m-d') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Tanggal Berakhir</label>
                                <input type="date" disabled class="tm form-control form-control-sm" value="{{ date_format(date_create($profiledata->tglberakhir),'Y-m-d') }}">
                            </div>                
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input disabled class="form-control form-control-sm"  value="{{ $profiledata->email }}" id="inputEmailAddress" type="email" placeholder="Enter your email address" />
                        </div>
                        <div class="row gx-2 mb-2">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Status</label>
                                <input name="status_merch" class="form-control form-control-sm"  type="tel" placeholder="" value="{{ $profiledata->status }}" />
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Keterangan</label>
                                <input name="keterangan_merch" class="form-control form-control-sm"  type="text"  value="{{ $profiledata->keterangan }}"  />
                            </div>
                        </div>
                        <div class="row gx-2 mb-2">
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Nomor Telepon</label>
                                <input name="telp_merch"  class="form-control form-control-sm" id="inputPhone" type="tel" placeholder="Enter your phone number"value="{{ $profiledata->telp }}"  />
                            </div>
                            <div class="col-md-6">
                               <div class="row">
                                <div class="col">
                                    <label class="small mb-1" for="inputBirthday">lat</label>
                                    <input name="lat" class="form-control form-control-sm" id="inputBirthday" type="text" />
                                </div>
                                <div class="col">
                                    <label class="small mb-1" for="inputBirthday">long  </label>
                                    <input name="lng" class="form-control form-control-sm" id="inputBirthday" type="text" />
                                </div>
                               </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection