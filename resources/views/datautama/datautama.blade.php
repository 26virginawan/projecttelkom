@extends('layouts.sidebar')


@section('content')

<div class="content-body">
    <!-- <section class="content"> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2020</h3>
                        <br>


                        <div class="general-button">
                            <button type="button" class="btn mb-1 btn-success"><a href="/addutama2020"
                                    class="text-white icon-plus">Tambah
                                    Data</a></button>
                        </div>
                        <br>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
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
                                    @foreach($data_utama2020 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2020/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2020/delete/{{ $b->id }}" class="btn btn-danger"
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
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Utama Tahun 2020</h3>
                        <br>


                        <div class="general-button">
                            <button type="button" class="btn mb-1 btn-success"><a href="/addutama2021"
                                    class="text-white icon-plus">Tambah
                                    Data</a></button>
                        </div>
                        <br>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered ">
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
                                    @foreach($data_utama2021 as $b)
                                    <tr>
                                        <td>{{$b->month}}</td>
                                        <td>{{$b->target}}</td>
                                        <td>{{$b->relasi}}</td>
                                        <td>{{$b->COLL_M}}</td>
                                        <td>{{$b->COLL_C}}</td>
                                        <td><a href="editutama2021/{{$b->id}}" class="btn btn-warning">Edit</a>
                                            <a href="datautama2021/delete/{{ $b->id }}" class="btn btn-danger"
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection