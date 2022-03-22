@extends('layout.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <table class="table">
    <thead class="table-dark">
        <tr >
        <th scope="col">No. Daftar</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">Asal SMP</th>
        <th scope="col">Agama</th>
        <th scope="col">Minat Jurusan</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($registrars as $registrar)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$registrar['full_name']}}</td>
        <td>{{$registrar['gender']}}</td>
        <td>{{$registrar['address']}}</td>
        <td>{{$registrar['asal_smp']}}</td>
        <td>{{$registrar['religion']}}</td>
        <td>{{$registrar['major']}}</td>
        <td>
            <a href="{{route('registrar.delete', $registrar['id'])}}" class="btn btn-danger">Hapus</a>
            <a href="{{route('registrar.edit', $registrar['id'])}}" class="btn btn-warning">Edit</a>
            <a target="_blank" href="{{route('registrar.print', $registrar['id'])}}" class="btn btn-primary">Print</a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection