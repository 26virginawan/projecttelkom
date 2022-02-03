<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2012;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtama2012Controller extends Controller
{
    public function index()
    {
        $data_utama2012 = data_utama2012::sortable()->paginate(50);
        return view(
            'datautama.thn2012.index',
            ['data_utama2012' => $data_utama2012],
            compact('data_utama2012')
        );
    }
    public function add()
    {
        return view('datautama.thn2012.create');
    }

    public function create(Request $request)
    {
        $data_utama2012 = data_utama2012::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2012');
    }

    public function delete($id)
    {
        $data_utama2012 = data_utama2012::find($id);
        $data_utama2012->delete();
        return redirect('/datautama2012');
    }

    public function edit($id)
    {
        $data_utama2012 = data_utama2012::find($id);
        return view('datautama.thn2012.edit', [
            'data_utama2012' => $data_utama2012,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2012 = data_utama2012::find($id);
        $data_utama2012->month = $request->month;
        $data_utama2012->target = $request->target;
        $data_utama2012->relasi = $request->relasi;
        $data_utama2012->call_m = $request->call_m;
        $data_utama2012->call_c = $request->call_c;
        $data_utama2012->save();
        return redirect('/datautama2012');
    }
}