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
            {{-- <div class="kop-surat">
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
            </table> --}}
            <div class="text-center title clear">SURAT PERNYATAAN</div>
            <div class="body">
                <table class="mb-3">
                    <tr>
                        <td colspan="3">Yang bertanda tangan dibawah ini :</td>
                    </tr>
                    <tr>
                        <td width="140px">Nama</td>
                        <td width="10px">:</td>
                        <td>DENI ANDRIANSYAH</td>
                    </tr>
                    <tr>
                        <td width="140px">NIP</td>
                        <td width="10px">:</td>
                        <td>19791227 200901 1 008</td>
                    </tr>
                    <tr>
                        <td width="140px">Pangkat/Gol</td>
                        <td width="10px">:</td>
                        <td>Penata Muda Tk.I (III/b)</td>
                    </tr>
                    <tr>
                        <td width="140px">Jabatan</td>
                        <td width="10px">:</td>
                        <td>Pengelola Urusan Kerumahtanggan</td>
                    </tr>
                    <tr>
                        <td width="140px">Nomor dan Tanggal SPT</td>
                        <td width="10px">:</td>
                        <td>SP 97 Tahun 2022 Tanggal 19 April 2022</td>
                    </tr>
                </table>

                <div>
                    <p>Dengan ini menyatakan bahwa dokumen / berkas-berkas pertanggungjawaban perjalanan dinas yang saya sampaikan sebagaimana terlampir adalah benar dan dapat dipertanggungjawabkan.</p>
                    <p>Apabila bukti-bukti tersebut tidak benar maka saya bersedia dikenakan sanksi sesuai dengan undang-undang yang berlaku.</p>
                </div>
                <div class="ttd">
                    <p>
                        Bandung, 24 Mei 2022
                        <br>
                        Yang membuat pernyataan
                    </p>
                    <div class="con-1">
                        DENI ANDRIANSYAH
                    </div>
                    <div class="con-2">
                        Penata Muda Tk.I (III/b)
                    </div>
                    <div class="con-2">
                        NIP. 19791227 200901 1 008
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection