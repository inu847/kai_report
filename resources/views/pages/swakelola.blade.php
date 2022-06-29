<style>
    th{
        font-weight: 900;
    }
</style>

<table>
    <thead>
        <tr>
            <th style="text-align: center; font-size: 20px; height: 50px;" colspan="19">DAFTAR NOMINATIF PERJALANAN DINAS</th>
        </tr>
        <tr>
            <td style="font-weight: 900;">Akun :</td>
            <td style="font-weight: 900;">4601.EBD.955.052.D.524111</td>
        </tr>
        <tr>
            <td colspan="5">Dalam Rangka Monitoring Hasil Penertiban dan Pembebasan Lahan di Lintas Paledang s.d Cicurug</td>
        </tr>
    </thead>
</table>

<table border="1px">
    <thead>
        <tr>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;">NO</th>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;">NAMA</th>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;" colspan="5">NOMOR SPT TANGGAL SPT</th>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;">TUJUAN</th>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;">LAMANYA PERJALANAN</th>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;" colspan="5">TANGGAL PERJALANAN DINAS</th>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;">TRANSPORT</th>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;">PENGINAPAN</th>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;">UANG HARIAN</th>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;">JUMLAH</th>
            <th style="background-color: #fcd5b5; height:30px; border:2px solid #000; font-weight: 900;">TTD</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;">1</td>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;">2</td>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;" colspan="5">3</td>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;">4</td>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;">5</td>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;" colspan="5">6</td>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;">7</td>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;">8</td>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;">9</td>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;">10</td>
            <td style="text-align: center; border: 5px solid #000;font-weight: 900;">11</td>
        </tr>
        @foreach (json_decode($document->pengikut) as $key => $pengikut)
            @php
                $dataPengikut = \App\Models\Pegawai::findOrFail($pengikut);
            @endphp
            <tr>
                <td style="text-align: center; border: 5px solid #000;">{{ $key+1 }}</td>
                <td style="text-align: center; border: 5px solid #000;">{{ $dataPengikut->nama }}</td>
                <td style="text-align: center; border: 5px solid #000;"colspan="5">SP {{ $document->nomor_spt }} / TAHUN {{ now()->format('Y') }}</td>
                <td style="text-align: center; border: 5px solid #000;">{{ $document->tempat_berangkat."-".$document->tempat_tujuan }}</td>
                <td style="text-align: center; border: 5px solid #000;">{{ $document->lama_pd." (".terbilang($document->lama_pd).") hari" }}</td>
                <td style="text-align: center; border: 5px solid #000;" colspan="5">{{ Carbon\Carbon::parse($document->tanggal_berangkat)->format('d M Y')." - ".Carbon\Carbon::parse($document->tanggal_kembali)->format('d M Y') }}</td>
                <td style="text-align: center; border: 5px solid #000;">Rp.{{ number_format($document->biaya_transport) }}</td>
                <td style="text-align: center; border: 5px solid #000;">Rp.{{ number_format($document->biaya_penginapan) }}</td>
                <td style="text-align: center; border: 5px solid #000;">Rp.{{ number_format($document->biaya_uang_harian) }}</td>
                <td style="text-align: center; border: 5px solid #000;">Rp.{{ number_format($document->jumlah) }}</td>
                <td style="text-align: center; border: 5px solid #000;"></td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th colspan="14" style="text-align: right;">JUMLAH</th>
            <th>Rp.{{ number_format($total_transport) }}</th>
            <th>Rp.{{ number_format($total_uang_penginapan) }}</th>
            <th>Rp.{{ number_format($total_uang_harian) }}</th>
            <th>Rp.{{ number_format($total_uang_jumlah) }}</th>
        </tr>
    </tfoot>
</table>

<table>
    <tr>
        <th style="text-align: center; font-weight: 900;"></th>
        <th style="text-align: center; font-weight: 900;" colspan="8">Bendahara Pengeluaran</th>
        <th style="text-align: center; font-weight: 900;" width="50px"></th>
        <th style="text-align: center; font-weight: 900;" colspan="8">Pejabat Pembuat Komitmen</th>
    </tr>
    <tr>
        <th style="text-align: center; font-weight: 900;" height="80px"></th>
    </tr>
    <tr>
        <th style="text-align: center; font-weight: 900; text-decoration: underline;"></th>
        <th style="text-align: center; font-weight: 900; text-decoration: underline;" colspan="8">ENTIN SUTINAH, SE</th>
        <th style="text-align: center; font-weight: 900; text-decoration: underline;" width="50px"></th>
        <th style="text-align: center; font-weight: 900; text-decoration: underline;" colspan="8">RITA WIDAYANTI,SE.,MM.</th>
    </tr>
    <tr>
        <th style="text-align: center; font-weight: 900;"></th>
        <th style="text-align: center; font-weight: 900;" colspan="8">NIP. 19840628 200912 2 004</th>
        <th style="text-align: center; font-weight: 900;" width="50px"></th>
        <th style="text-align: center; font-weight: 900;" colspan="8">NIP. 19720112 199203 2 002</th>
    </tr>
</table>