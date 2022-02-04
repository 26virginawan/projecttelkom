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
                                <form action="/carisalur" method="get">

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cari"
                                            placeholder="masukkan pencarian">
                                        <span class="input-group-append">
                                            <button class="btn btn-secondary text-white" type="submit">Search</button>
                                        </span>
                                    </div>


                                </form>
                            </div>
                            <button type="button" class="btn mb-1 btn-primary"><a href="/addsalur" class="text-white"><i
                                        class="fa fa-plus  text-white"></i>
                                    Tambah Data</a></button>
                            <button type="button" class="btn mb-1 btn-success"><a href="salur/export_excel"
                                    class="text-white"><i class="fa fa-file-excel-o  text-white"></i>
                                    Export Excell</a></button>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>


                                        <th>@sortablelink('lama')</th>
                                        <th>@sortablelink('kode')</th>
                                        <th>@sortablelink('nama')</th>
                                        <th>@sortablelink('addr')</th>
                                        <th>@sortablelink('C Kode Sektor')</th>
                                        <th>@sortablelink('Sub Sektor')</th>
                                        <th>@sortablelink('cluster')</th>
                                        <th>@sortablelink('C Kode Bentuk Usaha')</th>
                                        <th>@sortablelink('C Kode Type Penyaluran')</th>
                                        <th>@sortablelink('C Kode Jenis Penyaluran')</th>
                                        <th>@sortablelink('Jenis Usaha')</th>
                                        <th>@sortablelink('NO Suip')</th>
                                        <th>@sortablelink('BA')</th>
                                        <th>@sortablelink('CDSA')</th>
                                        <th>@sortablelink('Provinsi')</th>
                                        <th>@sortablelink('Kab/kota')</th>
                                        <th>@sortablelink('Kecamatan')</th>
                                        <th>@sortablelink('Kelurahan')</th>
                                        <th>@sortablelink('tanggal pengajuan')</th>
                                        <th>@sortablelink('Png Ke')</th>
                                        <th>@sortablelink('Pnj Ke')</th>
                                        <th>@sortablelink('Gender')</th>
                                        <th>@sortablelink('No Telp')</th>
                                        <th>@sortablelink('No Hp')</th>
                                        <th>@sortablelink('Pengajuan')</th>
                                        <th>@sortablelink('SDM')</th>
                                        <th>@sortablelink('Jumlah Asset')</th>
                                        <th>@sortablelink('Jumlah Omzet')</th>
                                        <th>@sortablelink('Nama Usaha')</th>
                                        <th>@sortablelink('Alamat Usaha')</th>
                                        <th>@sortablelink('Kec Usaha')</th>
                                        <th>@sortablelink('Provinsi Usaha')</th>
                                        <th>@sortablelink('Kab/Kota Usaha')</th>
                                        <th>@sortablelink('Telp Usaha')</th>
                                        <th>@sortablelink('Hp Usaha')</th>
                                        <th>@sortablelink('Tanggal Survey')</th>
                                        <th>@sortablelink('Tanggal Usulan')</th>
                                        <th>@sortablelink('Usulan Treg')</th>
                                        <th>@sortablelink('Tanggal Penetapan')</th>
                                        <th>@sortablelink('tanggal SP3K')</th>
                                        <th>@sortablelink('tanggal trf')</th>
                                        <th>@sortablelink('tanggal clr')</th>
                                        <th>@sortablelink('no SP3K')</th>
                                        <th>@sortablelink('pokok Pinjaman')</th>
                                        <th>@sortablelink('Jasa Pinjaman')</th>
                                        <th>@sortablelink('Total Pinjaman')</th>
                                        <th>@sortablelink('Perd ang')</th>
                                        <th>@sortablelink('Lama Pinjaman')</th>
                                        <th>@sortablelink('Grc Prd')</th>
                                        <th>@sortablelink('Tanggal Mulai')</th>
                                        <th>@sortablelink('tanggal Lunas')</th>
                                        <th>@sortablelink('Jenis Agunan')</th>
                                        <th>@sortablelink('Agunan')</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_salur as $b)
                                    <tr>
                                        <td>{{$b->lama}}</td>
                                        <td>{{$b->kode}}</td>
                                        <td>{{$b->nama}}</td>
                                        <td>{{$b->addr}}</td>
                                        <td>{{$b->c_kode_sektor}}</td>
                                        <td>{{$b->sub_sektor}}</td>
                                        <td>{{$b->cluster}}</td>
                                        <td>{{$b->c_kode_bentuk_usaha}}</td>
                                        <td>{{$b->c_kode_type_penyaluran}}</td>
                                        <td>{{$b->c_kode_jenis_penyaluran}}</td>
                                        <td>{{$b->jenis_usaha}}</td>
                                        <td>{{$b->no_suip}}</td>
                                        <td>{{$b->ba}}</td>
                                        <td>{{$b->cdsa}}</td>
                                        <td>{{$b->provinsi}}</td>
                                        <td>{{$b->kab_kota}}</td>
                                        <td>{{$b->kecamatan}}</td>
                                        <td>{{$b->kelurahan}}</td>
                                        <td>{{$b->tgl_pengj}}</td>
                                        <td>{{$b->png_ke}}</td>
                                        <td>{{$b->pnj_ke}}</td>
                                        <td>{{$b->gender}}</td>
                                        <td>{{$b->no_telp}}</td>
                                        <td>{{$b->no_hp}}</td>
                                        <td>{{$b->pengajuan}}</td>
                                        <td>{{$b->sdm}}</td>
                                        <td>{{$b->jml_asset}}</td>
                                        <td>{{$b->jml_omzet}}</td>
                                        <td>{{$b->nama_usaha}}</td>
                                        <td>{{$b->alamat_usaha}}</td>
                                        <td>{{$b->kec_usaha}}</td>
                                        <td>{{$b->prov_usaha}}</td>
                                        <td>{{$b->kab_kota_usaha}}</td>
                                        <td>{{$b->telp_usaha}}</td>
                                        <td>{{$b->hp_usaha}}</td>
                                        <td>{{$b->tgl_survey}}</td>
                                        <td>{{$b->tgl_usulan}}</td>
                                        <td>{{$b->usulan_treg}}</td>
                                        <td>{{$b->tgl_penetapan}}</td>
                                        <td>{{$b->tgl_sp3k}}</td>
                                        <td>{{$b->tgl_trf}}</td>
                                        <td>{{$b->tgl_clr}}</td>
                                        <td>{{$b->no_sp3k}}</td>
                                        <td>{{$b->pokok_pinj}}</td>
                                        <td>{{$b->jasa_pinj}}</td>
                                        <td>{{$b->total_pinj}}</td>
                                        <td>{{$b->perd_ang}}</td>
                                        <td>{{$b->lama_pinj}}</td>
                                        <td>{{$b->grc_prd}}</td>
                                        <td>{{$b->tgl_mulai}}</td>
                                        <td>{{$b->tgl_lunas}}</td>
                                        <td>{{$b->jenis_agunan}}</td>
                                        <td>{{$b->agunan}}</td>
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
                        </div>
                        Jumlah Data : {{ $data_salur->total() }} <br />
                        {{ $data_salur->links() }}
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