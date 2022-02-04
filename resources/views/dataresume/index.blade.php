@extends('layouts.sidebar')


@section('content')

<div class="content-body">
    <!-- <section class="content"> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Resume</h3>
                        <br>

                        <div class="general-button">
                            <button type="button" class="btn mb-1 btn-primary"><a href="/addangsur"
                                    class="text-white"><i class="fa fa-plus  text-white"></i>
                                    Tambah Data</a></button>
                        </div>
                        <br>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
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
                                        <td>{{$b->mitra_nunggak}}</a>
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
                            Jumlah Data : {{ $data_resume->total() }} <br> <br>
                            {{ $data_resume->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection