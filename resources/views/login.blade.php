@extends('template')
@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    Login
                </div>
                <div class="card-body p-2">
                    @if (session('pesan')=='berhasil')
                    <div class="alert alert-success" role="alert">
                      Berhasil Register! silahkan Login
                    </div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                          <label for=""></label>
                          <input class="form-control{{ $errors->has('email') ? 'is-invalid':'' }}"
                          type="email" name="email" placeholder="Email"/>
                          @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control{{ $errors->has('password') ? 'is-invalid':'' }}"
                            type="password" name="password" placeholder="Password"/>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-check form-group">
                          <label class="form-check-label">
                          <input type="checkbox" name="remember" class="form-check-input">
                          Remember Me
                          </label>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-dark btn-black">Login</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                            <a href="{{ route('admin.register') }}" class="btn btn-dark">Daftar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection