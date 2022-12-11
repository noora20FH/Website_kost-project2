@extends('layouts.fe')
@section('title')
    Login
@endsection
@section('content')
<style>
 .form-group{
        margin-bottom: 25px;
    }
    .card .card-header h4 {
        font-size: 16px;
        line-height: 28px;
        color:#000;
        padding-right: 10px;
        margin-bottom: 0;
    }

    .text-small{
        font-size: 12px;
        line-height: 20px;
    }
    a{
        color: red;
        font-weight: 500;
        -webkit-transition: all 0.5s
    }
    .btn:not(:disabled):not(.disabled){
        cursor: pointer;
    }
    .btn.btn-lg{
        padding: .75rem 1.5rem;
        font-size: 12px;
    }
    .btn-primary, .btn-primary.disabled {
    box-shadow: 0 2px 6px #acb5f6;
    background-color: #ebd5d5;
    border-color: #ebd5d5;
}
.btn {
    font-weight: 600;
    font-size: 12px;
    line-height: 24px;
    padding: 0.3rem 0.8rem;
    letter-spacing: 0.5px;
}
.btn-block{
        display: block;
        width: 100%;
    }
    .btn-group-lg>.btn, .btn-lg {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem;
}
    .btn-primary {
    color: #fff;
    background-color: #000;
    border-color: #ebd5d5;
}

.required:after {
    content:" *";
    color: red;
}
</style>
<div id="app">
    <section class="section" style="background: #F2F6FF" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="../dist/img/stisla-fill.svg" style="opacity: 0;" alt="logo" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary" style="margin-bottom: 20px;">
                        <div class="card-header"><h4><strong>Masuk Akun</strong></h4></div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="required">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="Masukkan Email Anda"
                                oninvalid="this.setCustomValidity('Email tidak boleh kosong')" oninput="setCustomValidity('')">                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label required">Kata Sandi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Kata Sandi" required autocomplete="current-password">
                                    <div class="input-group-append" >
                                        <div class="input-group-text">
                                            <i class="fas fa-eye-slash" id="togglePassword" style="cursor: pointer;"></i>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="float-right mb-4">
                                @if (Route::has('password.request'))
                                <a class="text-small" style="color: #1966BA" href="{{ route('password.request') }}">
                                    {{ __('Lupa Kata Sandi?') }}
                                </a>
                                @endif
                                </div>
                            </div>

                            <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Masuk
                            </button>
                            </div>
                        </form>
                            <div class="text-muted text-center">
                                Belum punya akun? <a href="{{ route('register') }}" style="color: #1966BA">Daftar sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('after-script')
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye');
    });
</script>
@endpush
{{-- <div class="row">
    <div class="card card-primary">
        <div class="card-header">
            <h4>Masuk</h4>
        </div>
        <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                    @csrf
                <div class="row mb-4 px-3">
                    <h6 class="mb-0 mr-4 mt-2"><strong>Masuk Akun</strong></h6>
                </div>
                <div class="form-group px-3 mb-4">
                    <label for="email" class="mb-2 required">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="Masukkan Email Anda"
                    oninvalid="this.setCustomValidity('Email tidak boleh kosong')" oninput="setCustomValidity('')">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group px-3 mb-4">
                    <div class="d-block">
                        <label for="password" class="control-label mb-2 required">Kata Sandi</label>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Kata Sandi" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="float-right mb-4">
                            @if (Route::has('password.request'))
                            <a class="text-small" style="color:blue" href="{{ route('password.request') }}">
                                {{ __('Lupa Kata Sandi?') }}
                            </a>
                            @endif
                        </div>
                </div>

                <div class="form-group px-3 mt-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Masuk
                    </button>
                </div>
                </form>
                <div class="mb-3 text-muted text-center">
                    Belum punya akun? <a href="{{ route('register') }}" style="color:red">Daftar sekarang</a>
                </div>
            </div>
        </div>
    </div> --}}
