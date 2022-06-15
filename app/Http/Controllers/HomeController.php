<?php

namespace App\Http\Controllers;

use App\Models\Price_table;
use Illuminate\Http\Request;
use App\Exports\PriceTablesExport;
use App\Imports\PriceTableImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    public function index() {

        $tablePrice = DB::table('price_tables')->simplePaginate(30);
        return view('home', compact('tablePrice'));
    }

    public function export() {

        return Excel::download(new PriceTablesExport, 'price_table.csv');
    }

    public function import(Request $request) {
        $request->validate([
            'import_file' => 'required',
        ]);

        Excel::import(new PriceTableImport, request()->file('import_file'));

        return back()->withStatus('Import done!');
    }

}
