@extends('templates.master')

@section('title')
    Daftar Siswa
@endsection

@section('content')
    <h2>Daftar Siswa</h2>
    <button>
        <a href="/siswa/create">Tambah Data</a>
    </button>
    @if(session('sukses'))
       <h4 style="color: blue;">{{ (session('sukses')) }}</h4>
    @elseif(session('hapus'))
    <h4 style="color: red;">{{ (session('hapus')) }}</h4>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>        
                <th>Nama</th>        
                <th>Alamat</th>        
                <th>No Telep</th>
                <th>Aksi</th>        
            </tr>
        </thead>
        @foreach($siswa as $data)        
        <tr>
            <td>{{$id++}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->no_telp}}</td>
            <td>
                <button><a href="/siswa/{{ $data->id }}/edit">Edit</a></button> 
                <button><a href="/siswa/{{ $data->id }}/delete" onclick="return confirm('yakin akan dihapus')">delete</a></button>                
            </td>
        </tr>
        @endforeach
    </table>
    <td>
    {{ $siswa->links() }} 
    </td>
@endsection