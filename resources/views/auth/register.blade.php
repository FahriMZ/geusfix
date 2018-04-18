@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="row">
                       <div class="col-md-5">
                        <div class="form-group">
                            <input id="username" type="text" placeholder="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                            @if($errors->has('username'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" placeholder="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" placeholder="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>

                            @if($errors->has('password_confirm'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password_confirm') }}</strong>
                                </span>
                            @endif
                        </div>
                       </div>

                       <div class="col-md-7">
                        <div class="form-group">
                            <input id="nama" type="text" placeholder="Nama Lengkap" class="form-control" name="nama" required>
                            @if($errors->has('nama'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn disabled btn-secondary">Jenis Kelamin</button>
                          </div>
                          <select name="jenis_kelamin" class="custom-select" id="jenis_kelamin">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>

                          @if($errors->has('jenis_kelamin'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="telepon" type="text" placeholder="Nomor Telepon" class="form-control" name="telepon" required>
                            @if($errors->has('telepon'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('telepon') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="tanggal_lahir" type="date" placeholder="Tanggal Lahir" class="form-control" name="tanggal_lahir" required>
                            @if($errors->has('tanggal_lahir'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea id="alamat" name="alamat" class="form-control" placeholder="alamat lengkap"></textarea>

                            @if($errors->has('alamat'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                            @endif
                        </div>
                       </div>

                           <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </div>
                            <div class="col-md-3 offset-md-3" >
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
