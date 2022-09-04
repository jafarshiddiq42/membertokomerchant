@extends('layouts.app')

@section('content')
<div class="registerbox">
    <div class="card card-custom">
        <div class="card-body ">
            <h4 class="card-title">Daftar</h4>
                <form action="{{  route('register') }}" method="post">
                    @csrf                
                      <div class="form-group py-2">                        
                        <input type="text"
                          class="form-control" id="" name="name" aria-describedby="helpId" placeholder="Nama">
                        {{-- <small id="helpId" class="form-text text-muted">Nama Lengkap</small> --}}
                      </div>
                      <div class="form-group py-2">                        
                        <input type="text"
                          class="form-control" id="" name="email" aria-describedby="helpId" placeholder="Email">
                        {{-- <small id="helpId" class="form-text text-muted">Nama Lengkap</small> --}}
                      </div>
                      <div class="form-group py-2">                     
                        <input type="password"
                          class="form-control" name="password" id=""  aria-describedby="helpId" placeholder="Password">
                        {{-- <small id="helpId" class="form-text text-muted">Nama Lengkap</small> --}}
                      </div>
                      <div class="form-group py-2">                     
                        <input type="password"
                          class="form-control" name="password_confirmation" id=""  aria-describedby="helpId" placeholder="Ulangi Password">
                        {{-- <small id="helpId" class="form-text text-muted">Nama Lengkap</small> --}}
                      </div>
                      <div class="form-group py-2">
                          <button type="submit" class="btn btn-primary" style="width: 100%;">Daftar</button>
                      </div>   
                      <div class="form-group py-2">
                        <a href="/login">Sudah punya akun? masuk</a>
                      </div>
                </form>
        </div>
    </div>
</div>
@endsection
