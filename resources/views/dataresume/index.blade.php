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

                    <h3>Data Resume</h3>
                    <table>

                        <tr>
                            <td><a href="/addresume" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
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

                    </table>



                    <br>
                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>


                                <th>@sortablelink('Tahun Salur')</th>
                                <th>@sortablelink('Jumlah Mitra')</th>
                                <th>@sortablelink('Pokok Pinjaman')</th>
                                <th>@sortablelink('Mitra Nunggak')</th>
                                <th>action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_resume as $b)
                            <tr>
                                <td>{{$b->id}}</td>
                                <td>{{$b->jml_mitra}}</td>
                                <td>{{$b->pokok_pinj}}</td>
                                <td>{{$b->mitra_nunggak}}&nbsp&nbsp<a href="/datanunggak" class="fa fa-eye"></a>
                                </td>
                                <td><a href="/editresume/{{$b->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/dataresume/delete/{{ $b->id }}" class="btn btn-danger"
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
                    Jumlah Data : {{ $data_resume->total() }} <br />
                    {{ $data_resume->links() }}
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