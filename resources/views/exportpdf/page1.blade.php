<style>
    .tbl-page1 td, .tbl-page1 th{
        padding: 5px !important;
    }
</style>
<div class='card'>
    <div class="card-header">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/img/kop_surat.png'))) }}" width="100%">
    </div>
    <div class='card-body'>
        <table class="table-header">
            <tr>
                <td width="70px">Lembar ke</td>
                <td width="10px">:</td>
                <td>-</td>
            </tr>
            <tr>
                <td width="70px">Kode No.</td>
                <td width="10px">:</td>
                <td>-</td>
            </tr>
            <tr>
                <td width="70px">Nomor</td>
                <td width="10px">:</td>
                <td>{{ $document->nomor_spd }}</td>
            </tr>
        </table>
        <div class="text-center title clear">SURAT PERJALANAN DINAS (SPD)</div>
        <div class="body">
            <table class="table table-bordered tbl-page1">
                <tr>
                    <td>1</td>
                    <td>Pejabat Pembuat Komitmen</td>
                    <td>{{ \App\Models\Pegawai::findOrFail(17)->nama }}.</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Nama/NIP Pegawai yang melaksanakan perjalanan dinas</td>
                    <td>
                        {{ $document->pegawai->nama }}
                        <br>
                        {{ "NIP.".$document->pegawai->nip }}
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>a. Pangkat dan Golongan <br>
                        b. Jabatan / Instansi <br>
                        c. Tingkat Biaya Perjalanan Dinas
                    </td>
                    <td>
                        a. {{ $document->pegawai->pangkat }} <br>
                        b. {{ $document->pegawai->jabatan }} <br>
                        c. {{ $document->tingkat_biaya_pd }}
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Maksud Perjalanan Dinas</td>
                    <td>{{ $document->maksud_pd }}</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Alat angkutan yang dipergunakan</td>
                    <td>Kendaraan Dinas</td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>
                        a. Tempat berangkat <br>
                        b. Tempat tujuan                    
                    </td>
                    <td>
                        a. {{ $document->tempat_berangkat }} <br>
                        b. {{ $document->tempat_tujuan }}
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        a. Lamanya Perjalanan Dinas <br>
                        b. Tanggal berangkat <br>
                        c. Tanggal harus kembali/tiba di tempat baru *)                    
                    </td>
                    <td>
                        a. {{ $document->lama_pd." hari" }} <br>
                        b. {{ Carbon\Carbon::parse($document->tanggal_berangkat)->format('d M Y') }} <br>
                        c. {{ Carbon\Carbon::parse($document->tanggal_kembali)->format('d M Y') }}
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td style="padding: 0px !important;">
                        <table width="100%">
                            <tr>
                                <td style="border-top: none !important;border-left: none !important;border-right: none !important; text-align: left;">Pengikut:</td>
                                <td style="border-top: none !important;border-left: none !important;border-right: none !important; text-align: left;">Nama</td>
                            </tr>
                            <tr>
                                <td style="border:none !important;">1.</td>
                                <td style="border:none !important;"></td>
                            </tr>
                            <tr>
                                <td style="border:none !important;">2.</td>
                                <td style="border:none !important;"></td>
                            </tr>
                            <tr>
                                <td style="border:none !important;">3.</td>
                                <td style="border:none !important;"></td>
                            </tr>
                            <tr>
                                <td style="border:none !important;">4.</td>
                                <td style="border:none !important;"></td>
                            </tr>
                            <tr>
                                <td style="border:none !important;">5.</td>
                                <td style="border:none !important;"></td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding: 0px !important;">
                        <table width="100%">
                            <tr>
                                <th style="border-top: none !important;border-left: none !important;">Tanggal Lahir</th>
                                <th style="border-top: none !important;border-left: none !important;border-right: none !important;">Keterangan</th>
                            </tr>
                            <tr>
                                <td class="br-1">-</td>
                                <td style="border: none !important;"></td>
                            </tr>
                            <tr>
                                <td class="br-1">-</td>
                                <td style="border: none !important;"></td>
                            </tr>
                            <tr>
                                <td class="br-1">-</td>
                                <td style="border: none !important;"></td>
                            </tr>
                            <tr>
                                <td class="br-1">-</td>
                                <td style="border: none !important;"></td>
                            </tr>
                            <tr>
                                <td class="br-1">-</td>
                                <td style="border: none !important;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                        Pembebanan Anggaran  <br>
                        a. Instansi <br>
                        b. Akun
                    </td>
                    <td>
                        <br>
                        a. Balai Teknik Perkeretaapian Kelas I Wilayah Jawa Bagian Barat<br>
                        b. {{ $document->pembebanan_anggaran }}
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Keterangan lain-lain</td>
                    <td>-</td>
                </tr>
            </table>
        </div>
        
        <table style="margin-left: 400px;" class="text-center">
            <tr style="text-align: left;">
                <td>Dikeluarkan di</td>
                <td>:</td>
                <td>Bandung</td>
            </tr>
            <tr style="text-align: left;">
                <td>Tanggal</td>
                <td>:</td>
                <td>24 Mei 2022</td>
            </tr>
            
            {{-- SPACER --}}
            <tr>
                <td colspan="3" height="50px"></td>
            </tr>

            <tr>
                <td colspan="3" class="con-1">{{ \App\Models\Pegawai::findOrFail(17)->nama }}</td>
            </tr>
            <tr class="con-2">
                <td colspan="3">{{ \App\Models\Pegawai::findOrFail(17)->pangkat }}</td>
            </tr>
            <tr class="con-2">
                <td colspan="3">NIP. {{ \App\Models\Pegawai::findOrFail(17)->nip }}</td>
            </tr>
        </table>
    </div>
</div>
<div style="page-break-after: always;"></div>