@extends('template')
@section('content')
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    Login
                </div>
                <div class="card-body p-2">
                    <form action="{{ route('admin.register') }}" method="post">
                        @csrf
                        <div class="form-group">
                          <input type="text" class="form-control{{ $errors->has('nama') ? 'is-invalid':'' }}"
                          name="nama" placeholder="Nama Lengkap"/>
                          @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <input type="email" class="form-control{{ $errors->has('email') ? 'is-invalid':'' }}"
                          name="email" placeholder="Alamat Email"/>
                          @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <input type="password" class="form-control{{ $errors->has('password') ? 'is-invalid':'' }}"
                          name="password" placeholder="Password"/>
                          @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <input type="password" class="form-control{{ $errors->has('password_cinfirmation') ? 'is-invalid':'' }}"
                          name="password_confirmation" placeholder="Confirmasi Password"/>
                          @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <select class="form-control{{ $errors->has('role') ? 'is-invalid':'' }}" name="role">
                            <option value="">Pilih : </option>
                            <option value="admin">Admin</option>
                            <option value="peminjam">Peminjam</option>
                          </select>
                          @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-dark btn-block">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection