@extends('layouts.sidebar')


@section('content')


<div class="content-body">

    <div class="container-fluid mt-3">
        <div class="row">



            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->

                    <div class="card-body">

                        <h3>Data Salur</h3>
                        <div class="general-button">

                            <div class="col-sm-4 offset-sm-8">
                                <form action="/cariangsur" method="get">

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cari"
                                            placeholder="masukkan pencarian">
                                        <span class="input-group-append">
                                            <button class="btn btn-secondary text-white" type="submit">Search</button>
                                        </span>
                                    </div>


                                </form>
                            </div>
                            <button type="button" class="btn mb-1 btn-primary"><a href="/addangsur"
                                    class="text-white"><i class="fa fa-plus  text-white"></i>
                                    Tambah Data</a></button>
                            <button type="button" class="btn mb-1 btn-success"><a href="angsur/export_excel"
                                    class="text-white"><i class="fa fa-file-excel-o  text-white"></i>
                                    Export Excell</a></button>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>lama</th>
                                        <th>kode</th>
                                        <th>nama</th>
                                        <th>ba</th>
                                        <th>cdsa</th>
                                        <th>provinsi</th>
                                        <th>kab_kota</th>
                                        <th>thn_salur</th>
                                        <th>jenis_angs</th>
                                        <th>kualitas</th>
                                        <th>angs_akhir</th>
                                        <th>gljr</th>
                                        <th>angsuran</th>
                                        <th>angs_pokok</th>
                                        <th>angs_jasa</th>
                                        <th>adj_pokok</th>
                                        <th>adj_jasa</th>
                                        <th>kelebihan</th>
                                        <th>pengembalian</th>
                                        <th>pendapatan</th>
                                        <th>c_user</th>
                                        <th>c_date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_angsur as $b)
                                    <tr>
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
                                        <td><a href="/edit/{{$b->id}}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/angsur/delete/{{ $b->id }}"
                                                class="btn btn-danger btn-sm">Hapus</a>
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
                        </div>
                        Jumlah Data : {{ $data_angsur->total() }} <br />
                        {{ $data_angsur->links() }}
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
</div>
@endsection