@extends('main')

@section('konten')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Petugas</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('blog/_edit') }}" method="post" class="pt-3" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <td>judul</td>
                    <td>
                        <input type="hidden" name="id" value="{{ $data->id }}" class="form-control" required>
                        <input type="text" name="judul" value="{{ $data->judul }}" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td>gambar</td>
                    <td>
                        <input type="file" name="file" value="{{ $data->gambar }}" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td>deskripsi</td>
                    <td>
                        <input type="text" name="deskripsi" value="{{ $data->deskripsi }}" class="form-control" required>
                    </td>
                </tr>
            </table>
            @if ($errors->any())
                <br>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $errors->first() }}
                    <button style="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
                <br>
            @endif
            <a href="/blog" class="btn btn-light">Kembali</a>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
</div>

@endsection
