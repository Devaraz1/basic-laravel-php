@extends('main')

@section('konten')

        <a href="{{ url('blog/add') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
        <br><br>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Blog</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    Judul
                                </th>
                                <th>
                                    Gambar
                                </th>
                                <th>
                                    Deskripsi 
                                </th>
                                <th>
                                    Edit
                                </th>
                                <th>
                                    Hapus
                                </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>
                                    Judul
                                </th>
                                <th>
                                    Gambar
                                </th>
                                <th>
                                    Deskripsi 
                                </th>
                                <th>
                                    Edit
                                </th>
                                <th>
                                    Hapus
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($data as $dt)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $dt->judul }}</td>
                                    <td><img width="100px" src="{{ url('/image_gallery/'.$dt->gambar) }}" alt="File"></td>
                                    <td>{{ $dt->deskripsi }}</td>
                                    <td>
                                        <a href="{{ url('blog/edit/' . $dt->id) }}" class="btn btn-info "><i class="fas fa-pencil-alt"></i> Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('blog/_delete/' . $dt->id) }}" class="btn btn-danger "><i class="fas fa-trash-alt"></i> Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
