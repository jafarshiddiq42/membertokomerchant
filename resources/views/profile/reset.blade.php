@extends('layouts.theme')
@section('content')
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->

        <div class="card mb-4 mb-xl-0">
            <div class="card-header">Reset Password</div>
            <div class="card-body ">
                <!-- Profile picture image-->
                {{-- <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="" /> --}}
                <!-- Profile picture help block-->
                <div class="small d-flex font-italic mb-4" style="place-content: center;">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="">
                        <form action="/resetpass" method="post">
                            @csrf
                            <div class="row py-2">
                                <div class="col">
                                    <label for="password">
                                        Password baru
                                        <input type="password" name="pass" class="form-control form-control-sm"
                                            id="pass">
                                    </label>
                                    <span class="show-password" id="show-pass"><i class="fa fa-eye"></i></span>
                                    <span class="show-password" id="hide-pass" style="display: none"><i class="fa fa-eye-slash"></i></span>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
                <!-- Profile picture upload button-->
                {{-- <button class="btn btn-primary" type="button">Upload new image</button> --}}
            </div>
        </div>
    @endsection
   
