@extends('main')

@section('konten')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Blog</h6>
    </div>
    <div class="card-body">
        <form action="{{ url('blog/_create') }}" method="post" class="pt-3"  enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <td>Judul</td>
                    <td>
                        <input type="text" name="judul" value="" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td>
                        <input type="file" name="file" value="" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>
                        <input type="text" name="deskripsi" value="" class="form-control" required>
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
