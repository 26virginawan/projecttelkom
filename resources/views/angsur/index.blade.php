@section('js')
<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable({
        "iDisplayLength": 50
    });

});
</script>
@stop


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

                    <h3>Data Angsuran</h3>



                    <table>

                        <tr>
                            <td><a href="/addangsur" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                                    Tambah Data</a></td>

                            <!-- Import Excel -->
                            <td><a href="angsur/export_excel" class="btn btn-success btn-sm"><i
                                        class="fas fa-file-excel"></i> Export
                                    Data</a></td>
                        </tr>
                        <div class="col-sm-4 offset-sm-8">
                            <form action="/cariangsur" method="get">
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
                    <!-- Button trigger modal -->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <form action="import_excel" method="post" class="form-inline" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input type="file" class="form-control" name="file" required="">

                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-success"
                                    style="height: 38px;margin-left: -2px;">Import</button>
                            </span>
                        </form>

                    </div>
                    <br>

                    <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>@sortablelink('id')</th>
                                <th>@sortablelink('lama')</th>
                                <th>@sortablelink('kode')</th>
                                <th>@sortablelink('nama')</th>
                                <th>@sortablelink('ba')</th>
                                <th>@sortablelink('cdsa')</th>
                                <th>@sortablelink('provinsi')</th>
                                <th>@sortablelink('kab_kota')</th>
                                <th>@sortablelink('thn_salur')</th>
                                <th>@sortablelink('jenis_angs')</th>
                                <th>@sortablelink('kualitas')</th>
                                <th>@sortablelink('angs_akhir')</th>
                                <th>@sortablelink('gljr')</th>
                                <th>@sortablelink('angsuran')</th>
                                <th>@sortablelink('angs_pokok')</th>
                                <th>@sortablelink('angs_jasa')</th>
                                <th>@sortablelink('adj_pokok')</th>
                                <th>@sortablelink('adj_jasa')</th>
                                <th>@sortablelink('kelebihan')</th>
                                <th>@sortablelink('pengembalian')</th>
                                <th>@sortablelink('pendapatan')</th>
                                <th>@sortablelink('c_user')</th>
                                <th>@sortablelink('c_date')</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_angsur as $b)
                            <tr>
                                <td>{{$b->id}}</td>
                                <td>{{$b->lama}}</td>
                                <td>{{$b->kode}}</td>
                                <td>{{$b->nama}}</td>
                                <td>{{$b->ba}}</td>
                                <td>{{$b->cdsa}}</td>
                                <td>{{$b->provinsi}}</td>
                                <td>{{$b->kab_kota}}</td>
                                <td>{{$b->thn_salur}}</td>
                                <td>{{$b->jenis_angs}}</td>
                                <td>{{$b->kualitas}}</td>
                                <td>{{$b->angs_akhir}}</td>
                                <td>{{$b->gljr}}</td>
                                <td>{{$b->angsuran}}</td>
                                <td>{{$b->angs_pokok}}</td>
                                <td>{{$b->angs_jasa}}</td>
                                <td>{{$b->adj_pokok}}</td>
                                <td>{{$b->adj_jasa}}</td>
                                <td>{{$b->kelebihan}}</td>
                                <td>{{$b->pengembalian}}</td>
                                <td>{{$b->pendapatan}}</td>
                                <td>{{$b->c_user}}</td>
                                <td>{{$b->c_date}}</td>
                                <td><a href="/edit/{{$b->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/angsur/delete/{{ $b->id }}" class="btn btn-danger">Hapus</a>
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



                            </tr>
                        </tbody>

                    </table>
                    Jumlah Data : {{ $data_angsur->total() }} <br />
                    {{ $data_angsur->links() }}
                    <br />
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- </div> -->

    <!-- /.container-fluid -->
    <!-- </section> -->
    <br>

</div>
@endsection