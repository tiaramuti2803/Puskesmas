@extends('main')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit Dokter</h1>
        <br>
        <a href="/dokter" class="btn btn-primary">
            < Back</a>
                <hr>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/dokter/{{$dokter->id}}" method="post" class="mx-2">
                    @csrf
                    @method('PUT') 
                    <div class="form-group mt-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Dokter" value="{{$dokter->nama}}">
                    </div>

                    <div class="form-group mt-3">
                        <label for="spesialis">Spesialis</label>
                        <select class="form-control" name="spesialis">
                            <option value="Spesialis Anak" {{$dokter-> spesialis == 'Anak' ? 'selected' : ''}}>Spesialis Anak</option>
                            <option value="Spesialis Bedah" {{$dokter-> spesialis == 'Bedah' ? 'selected' : ''}}>Spesialis Bedah</option>
                            <option value="Spesialis Mata" {{$dokter-> spesialis == 'Mata' ? 'selected' : ''}}>Spesialis Mata</option>
                            <option value="Spesialis Kulit" {{$dokter-> spesialis == 'Kulit' ? 'selected' : ''}}>Spesialis Kulit</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat">{{$dokter->alamat}}</textarea>
                    </div>

                    <div class="form-group mt-3">
                        <label for="telp">No. Telp</label>
                        <input type="text" class="form-control" name="telp" placeholder="Masukkan No. Telp" value="{{$dokter->telp}}">
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div> 
                </form>

    </div>
@endsection