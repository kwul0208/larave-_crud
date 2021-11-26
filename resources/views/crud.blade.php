@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1>Crud</h1>
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <a href="/crud/posts/create">tambah</a>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['nim']}}</td>
                        <td>{{ $data['alamat'] }}</td>
                        <td class="d-flex justify-content-between">
                            <a class="btn btn-primary" href="/crud/posts/{{ $data['id'] }}">detail</a>
                            <a class="btn btn-warning" href="/crud/posts/{{ $data['id'] }}/edit">edit</a>
                            <form action="/crud/posts/{{ $data['id'] }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" onclick="confirm('yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection