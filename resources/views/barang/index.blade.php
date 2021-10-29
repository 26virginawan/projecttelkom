@extends('layouts.app')


@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Barang</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <!-- <th>No</th> -->
                                        <th>kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>stok barang</th>
                                        <th>Harga</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang as $b)
                                    <tr>
                                        <!-- <td>{{$b->id}}</td> -->
                                        <td>{{$b->kode_barang}}</td>
                                        <td>{{$b->nama_barang}}</td>
                                        <td>{{$b->stok_barang}}</td>
                                        <td>{{$b->harga_barang}}</td>
                                        <td><a href="edit/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="barang/delete/{{ $b->id }}" class="btn btn-danger">Hapus</a>
                                            <!-- <form action="barang/delete/{{$b->id}}" class=" btn btn-danger">
                                                <button class="dropdown-item "
                                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                    Hapus
                                                </button>
                                            </form> -->
                                        </td>
                                    </tr>
                                    @endforeach

                                    <!-- <h5 class="card-header">Search</h5> -->

                                    <a href="/add" class="btn btn-primary">Tambah Data</a>

                                    <div class="col-sm-4 offset-sm-8">
                                        <form action="/caribarang" method="get">
                                            <div class="card-body">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="cari">
                                                    <span class="input-group-append">
                                                        <button class="btn btn-secondary" type="submit">Search</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    </tr>
                                </tbody>
                            </table>
                            <br />
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <!-- /.container-fluid -->
    </section>
    <br>

</div>
@endsection