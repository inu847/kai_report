@extends('layouts.dashboard')

@section('title')
    Page 1
@endsection
@section('content')
    <div class='card'>
        <div class='card-body'>
            <div class="kop-surat">
                <img src="{{ asset('img/kop_surat.png') }}" width="100%">
            </div>
            <table class="table-header-270">
                <tr>
                    <td>Beban MAK</td>
                    <td width="10px">:</td>
                    <td>4601.EBD.955.052.D.524111</td>
                </tr>
                <tr>
                    <td>Bukti Kas No.</td>
                    <td width="10px">:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Tahun Anggaran</td>
                    <td width="10px">:</td>
                    <td>2022</td>
                </tr>
            </table>

            <div class="card-border clear">
                KUITANSI
            </div>
            <hr>

            <div class="body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td width="150px">Sudah terima dari</td>
                            <td width="10px">:</td>
                            <td>Balai Teknik Perkeretaapian Wilayah Jawa Bagian Barat</td>
                        </tr>
                        <tr>
                            <td width="150px">Uang sebesar</td>
                            <td width="10px">:</td>
                            <td>Rp. 2.350.000,-</td>
                        </tr>
                        <tr>
                            <td width="150px">Untuk pembayaran</td>
                            <td width="10px">:</td>
                            <td>Biaya perjalanan dinas ke wilayah Bogor selama 3 ( tiga ) hari kerja tanggal 20-22 April 2022.</td>
                        </tr>
                        <tr>
                            <td width="150px">Berdasarkan SPD</td>
                            <td width="10px">:</td>
                            <td>Pejabat Pembuat Komitmen Balai Teknik Perkeretaapian Wilayah Jawa Bagian Barat Nomor : KU.004/19/12/BTP-JABAR/2022</td>
                        </tr>
                        <tr>
                            <td width="150px">Tanggal</td>
                            <td width="10px">:</td>
                            <td>19 April 2022.</td>
                        </tr>
                        <tr>
                            <td width="150px">Untuk perjalanan dinas dari</td>
                            <td width="10px">:</td>
                            <td>Bandung ke Bogor</td>
                        </tr>
                        <tr>
                            <td width="150px">Terbilang</td>
                            <td width="10px">:</td>
                            <td>Dua Juta Tiga Ratus Lima Puluh Ribu Rupiah</td>
                        </tr>
                    </tbody>
                </table>

                <div class="row">
                    <div class="col col-ttd">
                        <p>
                            Setuju dibayar
                            <br> 
                            Pejabat Pembuat Komitmen 
                        </p>
                        
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
                    <div class="col col-ttd">
                        <p>
                            Lunas dibayar Tgl,22 Feb 2022
                            <br> 
                            Bendahara Pengeluaran
                        </p>
                        <div class="con-1">
                            ENTIN SUTINAH, SE.
                        </div>
                        <div class="con-2">
                            Penata Muda (III/a)
                        </div>
                        <div class="con-2">
                            NIP. 19840628 200912 2 004
                        </div>
                    </div>
                    <div class="col col-ttd">
                        <p>
                            Bandung, 22 Februari 2014
                            <br> 
                            Yang menerima 
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
    </div>
@endsection