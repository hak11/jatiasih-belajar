@extends('templates.master')

@section('title')
    Input Data
@endsection

@section('content')
<div class="input">
     <h1>Input Data Siswa</h1>
     <form action="/siswa/{{$siswa->id}}/update" method="POST">
     {{csrf_field()}}
        <table>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td><input type="text" name="nama" id="nama" placeholder="nama" value="{{ $siswa->nama }}"></td>
            </tr>
            <tr>
                <td>
                   <label for="telp">No Telephon</label> 
                </td>
                <td><input type="number" id="telp" name="no_telp" placeholder="no telp ex(08xxxxx)" value="{{ $siswa->no_telp }}"></td>
            </tr>            
            <tr>
                <td>
                    <label for="alamat">Alamat</label> 
                </td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="10">{{ $siswa->alamat }}</textarea></td>
            </tr>
            <td>
                <button><a href="/siswa">Kembali</a></button>   
                <button type="submit" name="submit">Simpan</button>   
            </td>
        </table>
     </form> 
     
</div>
@endsection