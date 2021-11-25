@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h1>Crud</h1>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['nim']}}</td>
                        <td>{{ $data['alamat'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection