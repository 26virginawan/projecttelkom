<?php

namespace App\Http\Controllers;

use Session;

use App\data_utama2013;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataUtama2013Controller extends Controller
{
    public function index()
    {
        $data_utama2013 = data_utama2013::sortable()->paginate(50);
        return view(
            'datautama.thn2013.index',
            ['data_utama2013' => $data_utama2013],
            compact('data_utama2013')
        );
    }
    public function add()
    {
        return view('datautama.thn2013.create');
    }

    public function create(Request $request)
    {
        $data_utama2013 = data_utama2013::create([
            'id' => $request->id,
            'month' => $request->month,
            'target' => $request->target,
            'relasi' => $request->relasi,
            'call_m' => $request->call_m,
            'call_c' => $request->call_c,
        ]);
        return redirect('/datautama2013');
    }

    public function delete($id)
    {
        $data_utama2013 = data_utama2013::find($id);
        $data_utama2013->delete();
        return redirect('/datautama2013');
    }

    public function edit($id)
    {
        $data_utama2013 = data_utama2013::find($id);
        return view('datautama.thn2013.edit', [
            'data_utama2013' => $data_utama2013,
        ]);
    }
    public function update($id, Request $request)
    {
        $data_utama2013 = data_utama2013::find($id);
        $data_utama2013->month = $request->month;
        $data_utama2013->target = $request->target;
        $data_utama2013->relasi = $request->relasi;
        $data_utama2013->call_m = $request->call_m;
        $data_utama2013->call_c = $request->call_c;
        $data_utama2013->save();
        return redirect('/datautama2013');
    }
}