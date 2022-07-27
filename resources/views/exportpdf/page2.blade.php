<div class='card'>
    <div class="card-header">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/img/kop_surat.png'))) }}" width="100%">
    </div>
    <div class='card-body'>
        <table class="table-header-left">
            <tr>
                <td width="120px">Lampiran SPD Nomor</td>
                <td width="10px">:</td>
                <td>{{ $document->nomor_spd }}</td>
            </tr>
            <tr>
                <td width="120px">Tanggal</td>
                <td width="10px">:</td>
                <td>{{ Carbon\Carbon::parse($document->tgl_doc_keluar)->format('d M Y') }}</td>
            </tr>
        </table>
        <div class="text-center title clear">RINCIAN BIAYA PERJALANAN DINAS</div>
        <div class="body">
            <table class="table table-bordered" style="width:100%;">
                <thead>
                    <tr>
                        <th width="10px">No.</th>
                        <th width="220px">PERINCIAN BIAYA</th>
                        <th>JUMLAH</th>
                        <th>KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="10px">1</td>
                        <td width="220px">Biaya Penginapan selama {{ $document->lama_pd }} hari @ Rp. {{ number_format($document->biaya_penginapan/$document->lama_pd) }},-</td>
                        <td>Rp.{{ number_format($document->biaya_penginapan) }},-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td width="10px">2</td>
                        <td width="220px">Biaya Uang Harian selama {{ $document->lama_pd }} hari @ Rp. {{ number_format($document->biaya_uang_harian/$document->lama_pd) }},-</td>
                        <td>Rp.{{ number_format($document->biaya_uang_harian) }},-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td width="10px">3</td>
                        <td width="220px">Biaya Transport PP</td>
                        <td>Rp.{{ number_format($document->biaya_transport) }},-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td width="220px" style="font-weight: 900;">Jumlah</td>
                        <td>Rp.{{ number_format($document->jumlah) }},-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered" style="width:100%;">
                <tr>
                    <td class="text-right" colspan="1" style="background-color: #4c84bf;font-weight:900;">Terbilang</td>
                    <td style="text-transform: capitalize; background-color: #4c84bf;font-weight:900;">{{ terbilang($document->jumlah)." Rupiah" }}</td>
                </tr>
            </table>
            <table style="margin: 20px auto;" class="text-center">
                <tr>
                    <td></td>
                    <td>Bandung, {{ Carbon\Carbon::parse($document->tgl_doc_keluar)->format('d M Y') }}</td>
                </tr>
                <tr>
                    <td width="270px">Telah dibayar sejumlah</td>
                    <td width="270px">Telah menerima jumlah uang sebesar</td>
                </tr>
                <tr>
                    <td>Rp.{{ number_format($document->jumlah) }},-</td>
                    <td>Rp.{{ number_format($document->jumlah) }},-</td>
                </tr>
                <tr>
                    <td style="text-width:900;">Bendahara Pengeluaran</td>
                    <td style="text-width:900;">Yang menerima</td>
                </tr>
                
                {{-- SPACER --}}
                <tr>
                    <td colspan="3" height="50px"></td>
                </tr>

                <tr>
                    <td class="con-1">ENTIN SUTINAH,SE</td>
                    <td class="con-1">{{ $document->pegawai->nama }}</td>
                </tr>
                <tr class="con-2">
                    <td>Penata Muda (III/a)</td>
                    <td>{{ $document->pegawai->pangkat }}</td>
                </tr>
                <tr class="con-2">
                    <td>NIP. 19840628 200912 2 004</td>
                    <td>{{ $document->pegawai->nip }}</td>
                </tr>
            </table>
            <hr>
            <table class="center">
                <thead>
                    <tr>
                        <th class="text-center title" colspan="3">PERHITUNGAN SPPD RAMPUNG</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ditetapkan sejumlah</td>
                        <td width="10px">:</td>
                        <td>Rp. {{ number_format($document->jumlah) }},-</td>
                        
                    </tr>
                    <tr>
                        <td>Yang telah dibayar semula</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Sisa kurang / lebih</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
            <div class="ttd">
                <p>Pejabat Pembuat Komitmen</p>
                <div class="con-1">
                    RITA WIDAYANTI, S.E., M.M.
                </div>
                <div class="con-2">
                    Penata Tk.I (III/d)
                </div>
                <div class="con-2">
                    NIP. 19720112 199203 2 002
                </div>
            </div>
        </div>
    </div>
</div>
<div style="page-break-after: always;"></div>