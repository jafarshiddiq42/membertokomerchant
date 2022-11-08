@extends('layouts.theme')
@section('content')
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="account-profile.html">Profile</a>
        <a class="nav-link" href="account-billing.html">Banner Promo</a>
        <a class="nav-link" href="account-security.html">Banner Flash-Sale </a>
        {{-- <a class="nav-link" href="account-notifications.html">Notifications</a> --}}
    </nav>
    <hr class="mt-0 mb-4" />
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="" />
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Qr-Code</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="" />
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">
                        <div class="visible-print text-center">
                            {!! QrCode::size(100)->generate(url('profile/'.$profiledata->id)); !!}
                            <p>Scan me to return to the original page.</p>
                        </div>
                    </div>
                    <!-- Profile picture upload button-->
                    {{-- <button class="btn btn-primary" type="button">Upload new image</button> --}}
                </div>
            </div>
            
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Nama Merchant</label>
                            <input disabled class="form-control form-control-sm" id="inputUsername" type="text" placeholder="Enter your username" value="{{ $profiledata->nama_merchant }}" />
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-2 mb-2">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Kategori</label>
                                {{-- <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name"  /> --}}
                                <select disabled name="kategori" class="form-control form-control-sm" id="">
                                    <option value="">{{ $kategori->kategori }}</option>
                                </select>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1"  for="inputLastName">Sub-kategori</label>
                                {{-- <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name"  /> --}}
                                <select disabled name="subkategori" class="form-control form-control-sm" id="">
                                    <option value="">{{ $subkategori->sub_kategori }}</option>
                                </select>
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-2 mb-2">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Paket</label>
                                <input disabled class="form-control form-control-sm" id="inputOrgName" type="text" placeholder="Enter your organization name" value="{{ $profiledata->idpaket }}" />
                              
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                {{-- {{ date_format(date_create($profiledata->tgldaftar),'Y-m-d') }} --}}
                            </div>
                        </div>
                        <div class="row gx-2 mb-2">
                           
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                {{-- {{ date_format(date_create($profiledata->tgldaftar),'Y-m-d') }} --}}
                                <label class="small mb-1" for="inputLocation">Tanggal Daftar</label>
                                {{-- <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" /> --}}
                                <input type="date" disabled class="form-control form-control-sm" value="{{ date_format(date_create($profiledata->tgldaftar),'Y-m-d') }}">
                            </div>
                           
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                {{-- {{ date_format(date_create($profiledata->tgldaftar),'Y-m-d') }} --}}
                                <label class="small mb-1" for="inputLocation">Tanggal Berakhir</label>
                                {{-- <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" /> --}}
                                <input type="date" disabled  class="tm form-control form-control-sm" value="{{ date_format(date_create($profiledata->tglberakhir),'Y-m-d') }}">
                            </div>
                            
                            
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control form-control-sm" disabled value="{{ $profiledata->email }}" id="inputEmailAddress" type="email" placeholder="Enter your email address" />
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-2 mb-2">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Status</label>
                                <input disabled class="form-control form-control-sm" id="inputPhone" type="tel" placeholder="Enter your phone number" value="{{ $profiledata->status }}" />
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Keterangan</label>
                                <input disabled class="form-control form-control-sm" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="{{ $profiledata->keterangan }}"  />
                            </div>
                        </div>
                        <div class="row gx-2 mb-2">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Nomor Telepon</label>
                                <input disabled  class="form-control form-control-sm" id="inputPhone" type="tel" placeholder="Enter your phone number"value="{{ $profiledata->telp }}"  />
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                               <div class="row">
                                <div class="col">
                                    <label class="small mb-1" for="inputBirthday">lat</label>
                                    <input class="form-control form-control-sm" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday"  />
                                </div>
                                <div class="col">
                                    <label class="small mb-1" for="inputBirthday">long  </label>
                                    <input class="form-control form-control-sm" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday"  />
                                </div>
                               </div>
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Edit Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection