@extends('layouts.dashboard')

@section('title')
    Page 1
@endsection
<style>
    .center{
        margin-left: auto;
        margin-right: auto;
        width: 60% !important;
    }
    .ttd{
        margin-top: 20px;
        float: right;
        text-align: center;
        width: 50% !important;
    }
    .ttd  div{
        font-weight: 900;
    }
    .ttd  p{
        margin-bottom: 60px;
    }
    .con-1{
        text-decoration: underline;
    }
</style>
@section('content')
    <div class='card'>
        <div class='card-body'>
            <div class="kop-surat">
                <img src="{{ asset('img/kop_surat.png') }}" width="100%">
            </div>
            <table class="table table-bordered table-header">
                <tr>
                    <td width="70px">Lampiran SPD Nomor</td>
                    <td width="10px">:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td width="70px">Tanggal</td>
                    <td width="10px">:</td>
                    <td>-</td>
                </tr>
            </table>
            <div class="text-center title clear">RINCIAN BIAYA PERJALANAN DINAS</div>
            <div class="body">
                <table class="table table-bordered">
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
                            <td width="220px">Biaya Penginapan selama 2 (dua) malam @ Rp. 530.000,-</td>
                            <td>Rp.1.060.000,-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-right" colspan="2">Terbilang</td>
                            <td colspan="2">Dua Juta Tiga Ratus Lima Puluh Ribu Rupiah</td>
                        </tr>
                    </tfoot>
                </table>
                <hr>
                <table class="table table-bordered center">
                    <thead>
                        <tr>
                            <th class="text-center title" colspan="3">PERHITUNGAN SPPD RAMPUNG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ditetapkan sejumlah</td>
                            <td>:</td>
                            <td>Rp. 2.350.000,-</td>
                            
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
@endsection