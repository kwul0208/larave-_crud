@extends('layouts.main')
@section('container')
    <ul>
            <li>{{ $data['nama'] }}</li>
            <li>{{ $data['nim'] }}</li>
            <li>{{ $data['alamat'] }}</li>
    </ul>
@endsection