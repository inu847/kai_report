<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Exports\SurveiSwakelola;
use App\Models\Biaya;
use App\Models\Document;
use App\Models\OrderGroup;
use App\Models\OrderItem;
use App\Models\Pegawai;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $documents = Document::orderBy('id', 'desc')->get();

        return view('document.index', ['documents' => $documents]);
    }

    public function documentPreview()
    {
        return view('document.format');
    }

    public function form()
    {
        $pegawais = Pegawai::get();
        $biayas = Biaya::get();

        return view('document.form', ['pegawais' => $pegawais, 'biayas' => $biayas]);
    }

    public function findPegawai($id)
    {
        $pegawais = Pegawai::findOrFail($id);
        return response()->json($pegawais);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $tanggal_berangkat = new DateTime($data['tanggal_berangkat']);
        $tanggal_kembali = new DateTime($data['tanggal_kembali']);
        $selisihHari = (int)$tanggal_berangkat->diff($tanggal_kembali)->format('%a');
        $biaya_penginapan = $data['biaya_penginapan'] * $selisihHari;
        $biaya_harian = Biaya::findOrFail($data['tempat_tujuan']);
        $biaya_uang_harian = $biaya_harian->biaya * $selisihHari;
        $jumlah = $biaya_penginapan + $biaya_uang_harian + $data['biaya_transport'];
        $pengikuts = $data['pengikut'];
        array_push($pengikuts, $data['pegawai']);

        $data['tempat_berangkat'] = "Bandung";
        $data['pengikut'] = json_encode($pengikuts);
        $data['pegawai_id'] = $data['pegawai'];
        $data['lama_pd'] = $selisihHari;
        $data['biaya_penginapan'] = $biaya_penginapan;
        $data['biaya_uang_harian'] = $biaya_uang_harian;
        $data['jumlah'] = $jumlah;

        foreach ($pengikuts as $pengikut) {
            $pegawaiPengikut = Pegawai::findOrFail($pengikut);
            $data['pegawai_id'] = $pegawaiPengikut->id;
            $docs = Document::create($data);
        }

        return redirect()->back()->with('success', 'Dokumen berhasil dibuat!!');
    }

    public function format()
    {
        return view('document.format');
    }
    
    public function page1()
    {
        return view('pages.page1');
    }

    public function page2()
    {
        return view('pages.page2');
    }

    public function page3()
    {
        return view('pages.page3');
    }

    public function page4()
    {
        return view('pages.page4');
    }

    public function fullPdf($id)
    {
        $document = Document::findOrFail($id);
        $document['tempat_tujuan'] = Biaya::findOrFail($document['tempat_tujuan'])->provinsi;
        $pdf = PDF::loadView('exportpdf.full', ['document' => $document])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->setPaper('A4', 'horizontal')->download($document->pegawai->nama.'.pdf');
        return view('exportpdf.full', ['document' => $document]);
    }

    public function page1Download()
    {
        $pdf = PDF::loadView('pages.page1')->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->setPaper('A4', 'horizontal')->download('page1.pdf');
        // return view('pages.page1');
    }

    public function page2Download()
    {
        $pdf = PDF::loadView('pages.page2');
        return $pdf->setPaper('A4', 'horizontal')->download('page2.pdf');
        // return view('pages.page2');
    }

    public function page3Download()
    {
        $pdf = PDF::loadView('pages.page3');
        return $pdf->setPaper('A4', 'horizontal')->download('page3.pdf');
        return view('pages.page3');
    }

    public function page4Download()
    {
        $pdf = PDF::loadView('pages.page4');
        return $pdf->setPaper('A4', 'horizontal')->download('page4.pdf');
        // return view('pages.page4');
    }

    public function exportSwakelola($id)
    {
        // $document = Document::findOrFail($id);
        // $data['total_transport'] = 0;
        // $data['total_uang_penginapan'] = 0;
        // $data['total_uang_harian'] = 0;
        // $data['total_uang_jumlah'] = 0;

        // foreach (json_decode($document->pengikut) as $key => $pengikut) {
        //     $data['total_transport'] += $document->biaya_transport;
        //     $data['total_uang_penginapan'] += $document->biaya_penginapan;
        //     $data['total_uang_harian'] += $document->biaya_uang_harian;
        //     $data['total_uang_jumlah'] += $document->jumlah;
        // }
        // return view('pages.swakelola', $data, ['document' => $document]);
        return Excel::download(new SurveiSwakelola($id), 'survei swakelola.xlsx');
    }

    public function swakelola()
    {
        return view('pages.swakelola');
    }
}
