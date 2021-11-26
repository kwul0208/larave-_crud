@extends('layouts.main')
@section('container')
    <h1>Crud</h1>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form method="post" action="/crud/posts">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" name="nama" placeholder="Nama Lengkap" autofocus>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">Nim</label>
                    <input type="text" class="form-control  @error('nim') is-invalid @enderror " id="nim" name="nim" placeholder="ex: 2010xxx">
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control  @error('alamat') is-invalid @enderror " id="alamat" name="alamat" placeholder="ex: jl. haji...">
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endSection