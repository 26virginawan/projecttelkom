@extends('layouts.sidebar')


@section('content')

<div class="content-body">
    <!-- <section class="content"> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Nunggak Tahun 2010</h3>
                        <br>

                        <div class="header-right">
                            <div class="input-group icons">
                                <form action="/carinunggak2010" method="get">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="cari"
                                                placeholder="masukkan pencarian">
                                            <span class="input-group-append">
                                                <button class="btn btn-secondary text-white"
                                                    type="submit">Search</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="general-button">
                            <button type="button" class="btn mb-1 btn-success"><a href="/addnunggak2010"
                                    class="text-white icon-plus">Tambah
                                    Data</a></button>
                        </div>
                        <br>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
                                <thead>
                                    <tr>
                                        <th>@sortablelink('Kode')</th>
                                        <th>@sortablelink('nama')</th>
                                        <th>@sortablelink('usaha')</th>
                                        <th>@sortablelink('tgl_terakhir_bayar')</th>
                                        <th>@sortablelink('Nominal Terakhir Bayar')</th>
                                        <th>@sortablelink('Total Bayar')</th>
                                        <th>@sortablelink('Total Angsur')</th>
                                        <th>@sortablelink('Sisa Hutang')</th>
                                        <th style="width: 20%">action</th>

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
                                        <td><a href="/editnunggak2010/{{$b->id}}"
                                                class="btn btn-warning btn-sm">Edit</a>
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
                            Jumlah Data : {{ $data_nunggak2010->total() }} <br> <br>
                            {{ $data_nunggak2010->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection