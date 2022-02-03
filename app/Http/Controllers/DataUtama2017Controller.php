<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2017;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtama2017Controller extends Controller
{
    public function index()
    {
        $data_utama2017 = data_utama2017::sortable()->paginate(50);
        return view(
            'datautama.thn2017.index',
            ['data_utama2017' => $data_utama2017],
            compact('data_utama2017')
        );
    }
    public function add()
    {
        return view('datautama.thn2017.create');
    }

    public function create(Request $request)
    {
        $data_utama2017 = data_utama2010::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2017');
    }

    public function delete($id)
    {
        $data_utama2017 = data_utama2017::find($id);
        $data_utama2017->delete();
        return redirect('/datautama2017');
    }

    public function edit($id)
    {
        $data_utama2017 = data_utama2017::find($id);
        return view('datautama.thn2017.edit', [
            'data_utama2017' => $data_utama2017,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2017 = data_utama2017::find($id);
        $data_utama2017->month = $request->month;
        $data_utama2017->target = $request->target;
        $data_utama2017->relasi = $request->relasi;
        $data_utama2017->call_m = $request->call_m;
        $data_utama2017->call_c = $request->call_c;
        $data_utama2017->save();
        return redirect('/datautama2017');
    }
}