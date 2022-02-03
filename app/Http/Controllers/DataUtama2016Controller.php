<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2016;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtama2016Controller extends Controller
{
    public function index()
    {
        $data_utama2016 = data_utama2016::sortable()->paginate(50);
        return view(
            'datautama.thn2016.index',
            ['data_utama2016' => $data_utama2016],
            compact('data_utama2016')
        );
    }
    public function add()
    {
        return view('datautama.thn2016.create');
    }

    public function create(Request $request)
    {
        $data_utama2016 = data_utama2016::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2016');
    }

    public function delete($id)
    {
        $data_utama2016 = data_utama2016::find($id);
        $data_utama2016->delete();
        return redirect('/datautama2016');
    }

    public function edit($id)
    {
        $data_utama2016 = data_utama2016::find($id);
        return view('datautama.thn2016.edit', [
            'data_utama2016' => $data_utama201,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2016 = data_utama2016::find($id);
        $data_utama2016->month = $request->month;
        $data_utama2016->target = $request->target;
        $data_utama2016->relasi = $request->relasi;
        $data_utama2016->call_m = $request->call_m;
        $data_utama2016->call_c = $request->call_c;
        $data_utama2016->save();
        return redirect('/datautama2016');
    }
}