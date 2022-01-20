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

                    <h3>Data Utama</h3>



                    <table>

                        <tr>
                            <td><a href="/addsalur" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                                    Tambah Data</a></td>
                            <td><a href="salur/export_excel" class="btn btn-success btn-sm"><i
                                        class="fas fa-file-excel"></i> Export
                                    Data</a></td>
                        </tr>
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
                    </table>
                    <br>
                    <h3>DATA TAHUN 2018</h3>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>


                                <th>@sortablelink('month')</th>
                                <th>@sortablelink('target')</th>
                                <th>@sortablelink('relasi')</th>
                                <th>@sortablelink('COLL_M')</th>
                                <th>@sortablelink('COLL_C')</th>
                                <th>action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_utama2018 as $b)
                            <tr>
                                <td>{{$b->month}}</td>
                                <td>{{$b->target}}</td>
                                <td>{{$b->relasi}}</td>
                                <td>{{$b->COLL_M}}</td>
                                <td>{{$b->COLL_C}}</td>
                                <td><a href="edit/{{$b->id}}" class="btn btn-warning">Edit</a>
                                    <a href="salur/delete/{{ $b->id }}" class="btn btn-danger"
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
                    Jumlah Data : {{ $data_utama2018->total() }} <br />
                    {{ $data_utama2018->links() }}
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