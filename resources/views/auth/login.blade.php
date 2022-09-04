@extends('layouts.app')

@section('content')
<div class="registerbox">
    <div class="card card-custom">
        <div class="card-body">
            <h4 class="card-title">Login</h4>
                <form action="{{  route('login') }}" method="post">
                    @csrf                
               
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
                          <button type="submit" class="btn btn-primary" style="width: 100%;">Masuk</button>
                      </div>   
                      <div class="form-group py-2">
                        <a href="/register">Belum punya akun? daftar</a>
                      </div>
                </form>
        </div>
    </div>
</div>
@endsection
