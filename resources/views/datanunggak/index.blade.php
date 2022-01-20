@extends('layouts.app')


@section('content')

<div class="content">

    <!-- <section class="content"> -->
    <!-- <div class="container-fluid"> -->
    <div class="row">



        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->

                <div class="card-body">

                    <!-- <section class="content"> -->
                    <!-- <div class="container-fluid"> -->

                    <h3>Data Mitra Nunggak Tahun 2010</h3>
                    <!-- <table>

                        <tr>
                            <td><a href="/addnunggak2010" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                                    Tambah Data</a></td>
                            <td><a href="salur/export_excel" class="btn btn-success btn-sm"><i
                                        class="fas fa-file-excel"></i> Export
                                    Data</a></td>
                        </tr>
                        <div class="d-flex justify-content-between text-right">
                            <div class="col-sm-4 offset-sm-8">
                                <form action="/carisalur" method="get">
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
                        </div>
                    </table> -->
                    <br>
                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>@sortablelink('kode')</th>
                                <th>@sortablelink('nama')</th>
                                <th>@sortablelink('usaha')</th>
                                <th>@sortablelink('tgl_terakhir_bayar')</th>
                                <th>@sortablelink('Nominal Terakhir Bayar')</th>
                                <th>@sortablelink('Total Bayar')</th>
                                <th>@sortablelink('Total Angsur')</th>
                                <th>@sortablelink('Sisa Hutang')</th>
                                <th style="width: 10%">action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_nunggak2010 as $b)
                            <tr>
                                <td>{{$b->kode}}</td>
                                <td>{{$b->nama}}</td>
                                <td>{{$b->usaha}}</td>
                                <td>{{$b->tgl_terakhir_bayar}}</td>
                                <td>{{$b->terakhir_bayar}}</td>
                                <td>{{$b->total_bayar}}</td>
                                <td>{{$b->total_angsur}}</td>
                                <td>{{$b->sisa_hutang}}</td>
                                <td><a href="/editnunggak2010/{{$b->id}}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/datanunggak2010/delete/{{ $b->id }}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                </td>
                            </tr>
                            @endforeach


                            </tr>
                        </tbody>

                    </table>

                    <br />

                    <h3>Data Mitra Nunggak Tahun 2011</h3>
                    <!-- <table>

                        <tr>
                            <td><a href="/addnunggak2010" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                                    Tambah Data</a></td>
                            <td><a href="salur/export_excel" class="btn btn-success btn-sm"><i
                                        class="fas fa-file-excel"></i> Export
                                    Data</a></td>
                        </tr>
                        <div class="d-flex justify-content-between text-right">
                            <div class="col-sm-4 offset-sm-8">
                                <form action="/carisalur" method="get">
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
                        </div>
                    </table> -->
                    <br>
                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>@sortablelink('kode')</th>
                                <th>@sortablelink('Nama')</th>
                                <th>@sortablelink('usaha')</th>
                                <th>@sortablelink('tgl_terakhir_bayar')</th>
                                <th>@sortablelink('Nominal Terakhir Bayar')</th>
                                <th>@sortablelink('Total Bayar')</th>
                                <th>@sortablelink('Total Angsur')</th>
                                <th>@sortablelink('Sisa Hutang')</th>
                                <th style="width: 10%">action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_nunggak2011 as $b)
                            <tr>
                                <td>{{$b->kode}}</td>
                                <td>{{$b->nama}}</td>
                                <td>{{$b->usaha}}</td>
                                <td>{{$b->tgl_terakhir_bayar}}</td>
                                <td>{{$b->terakhir_bayar}}</td>
                                <td>{{$b->total_bayar}}</td>
                                <td>{{$b->total_angsur}}</td>
                                <td>{{$b->sisa_hutang}}</td>
                                <td><a href="/editnunggak2010/{{$b->id}}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/datanunggak2010/delete/{{ $b->id }}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                </td>
                            </tr>
                            @endforeach


                            </tr>
                        </tbody>

                    </table>

                    <br />
                    <h3>Data Mitra Nunggak Tahun 2012</h3>
                    <!-- <table>

                        <tr>
                            <td><a href="/addnunggak2010" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                                    Tambah Data</a></td>
                            <td><a href="salur/export_excel" class="btn btn-success btn-sm"><i
                                        class="fas fa-file-excel"></i> Export
                                    Data</a></td>
                        </tr>
                        <div class="d-flex justify-content-between text-right">
                            <div class="col-sm-4 offset-sm-8">
                                <form action="/carisalur" method="get">
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
                        </div>
                    </table> -->
                    <br>
                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>@sortablelink('kode')</th>
                                <th>@sortablelink('Nama')</th>
                                <th>@sortablelink('usaha')</th>
                                <th>@sortablelink('tgl_terakhir_bayar')</th>
                                <th>@sortablelink('Nominal Terakhir Bayar')</th>
                                <th>@sortablelink('Total Bayar')</th>
                                <th>@sortablelink('Total Angsur')</th>
                                <th>@sortablelink('Sisa Hutang')</th>
                                <th style="width: 10%">action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_nunggak2012 as $b)
                            <tr>
                                <td>{{$b->kode}}</td>
                                <td>{{$b->nama}}</td>
                                <td>{{$b->usaha}}</td>
                                <td>{{$b->tgl_terakhir_bayar}}</td>
                                <td>{{$b->terakhir_bayar}}</td>
                                <td>{{$b->total_bayar}}</td>
                                <td>{{$b->total_angsur}}</td>
                                <td>{{$b->sisa_hutang}}</td>
                                <td><a href="/editnunggak2012/{{$b->id}}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/datanunggak2012/delete/{{ $b->id }}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                </td>
                            </tr>
                            @endforeach


                            </tr>
                        </tbody>

                    </table>

                    <br />
                    <h3>Data Mitra Nunggak Tahun 2013</h3>
                    <!-- <table>

                        <tr>
                            <td><a href="/addnunggak2010" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                                    Tambah Data</a></td>
                            <td><a href="salur/export_excel" class="btn btn-success btn-sm"><i
                                        class="fas fa-file-excel"></i> Export
                                    Data</a></td>
                        </tr>
                        <div class="d-flex justify-content-between text-right">
                            <div class="col-sm-4 offset-sm-8">
                                <form action="/carisalur" method="get">
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
                        </div>
                    </table> -->
                    <br>
                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>@sortablelink('kode')</th>
                                <th>@sortablelink('Nama')</th>
                                <th>@sortablelink('usaha')</th>
                                <th>@sortablelink('tgl_terakhir_bayar')</th>
                                <th>@sortablelink('Nominal Terakhir Bayar')</th>
                                <th>@sortablelink('Total Bayar')</th>
                                <th>@sortablelink('Total Angsur')</th>
                                <th>@sortablelink('Sisa Hutang')</th>
                                <th style="width: 10%">action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_nunggak2013 as $b)
                            <tr>
                                <td>{{$b->kode}}</td>
                                <td>{{$b->nama}}</td>
                                <td>{{$b->usaha}}</td>
                                <td>{{$b->tgl_terakhir_bayar}}</td>
                                <td>{{$b->terakhir_bayar}}</td>
                                <td>{{$b->total_bayar}}</td>
                                <td>{{$b->total_angsur}}</td>
                                <td>{{$b->sisa_hutang}}</td>
                                <td><a href="/editnunggak2013/{{$b->id}}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/datanunggak2013/delete/{{ $b->id }}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    <!-- <form action="salur/delete/{{$b->id}}" class=" btn btn-danger">
                                        <button class="dropdown-item " Hapus </button>
                                    </form> -->
                                </td>
                            </tr>
                            @endforeach


                            </tr>
                        </tbody>

                    </table>

                    <br />
                    <!-- /.row -->
                    <!-- </div> -->

                    <!-- /.container-fluid -->
                    <!-- </section> -->
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection