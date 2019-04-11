@extends('master.app')

@section('content')
<div class="container mt-4">
  <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <h3>Unggah Resep</h3>
            <hr>
          </div>
          <div class="col-12 col-md-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul Resep</label>
                    <input id="judul" type="text" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" name="judul" value="{{ old('judul') }}" placeholder="Judul Resep" required autofocus>
                    @if ($errors->has('judul'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('judul') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                  <label for="kategori">Kategori</label>
                  <select class="custom-select form-control{{ $errors->has('kategori') ? ' is-invalid' : '' }}" id="kategori" name="kategori">
                    <option value="">Pilih Kategori</option>
                    <option>Makanan Utama</option>
                    <option>Makanan</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  @if ($errors->has('kategori'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('kategori') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="password">Bahan</label>
                  <div class="form-row">
                     <div class="col-8">
                       <input type="text" class="form-control" placeholder="Nama Bahan">
                     </div>
                     <div class="col">
                       <input type="text" class="form-control" placeholder="Kuantitas">
                     </div>
                   </div>
                   <button type="button" class="btn btn-flat float-right">Tambah Bahan</button>
                </div>

                <div class="form-group">
                  <label for="password-confirm">Konfirmasi Password</label>
                  <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password-confirm" name="password_confirmation"  placeholder="Konfirmasi Password" required>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
          </div>
          <div class="col">

          </div>
        </div>
      </div>
  </div>
</div>
@endsection
