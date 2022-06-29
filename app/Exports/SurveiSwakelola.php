<?php

namespace App\Exports;

use App\Models\Document;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SurveiSwakelola implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $document = Document::findOrFail($this->id);
        $data['total_transport'] = 0;
        $data['total_uang_penginapan'] = 0;
        $data['total_uang_harian'] = 0;
        $data['total_uang_jumlah'] = 0;

        foreach (json_decode($document->pengikut) as $key => $pengikut) {
            $data['total_transport'] += $document->biaya_transport;
            $data['total_uang_penginapan'] += $document->biaya_penginapan;
            $data['total_uang_harian'] += $document->biaya_uang_harian;
            $data['total_uang_jumlah'] += $document->jumlah;
        }
        return view('pages.swakelola', $data, ['document' => $document]);
    }
}
