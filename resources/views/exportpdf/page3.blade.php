<div class='card'>
    <div class="card-header">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/img/kop_surat.png'))) }}" width="100%">
    </div>
    <div class='card-body'>
        <table class="table-header-270">
            <tr>
                <td>Beban MAK</td>
                <td width="10px">:</td>
                <td>{{ $document->pembebanan_anggaran }}</td>
            </tr>
            <tr>
                <td>Bukti Kas No.</td>
                <td width="10px">:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Tahun Anggaran</td>
                <td width="10px">:</td>
                <td>{{ now()->format('Y') }}</td>
            </tr>
        </table>

        <div class="card-border clear">
            KUITANSI
        </div>
        <hr>

        <div class="body">
            <table>
                <tbody>
                    <tr>
                        <td width="150px">Sudah terima dari</td>
                        <td width="10px">:</td>
                        <td>Balai Teknik Perkeretaapian Wilayah Jawa Bagian Barat</td>
                    </tr>
                    <tr>
                        <td width="150px">Uang sebesar</td>
                        <td width="10px">:</td>
                        <td>Rp. {{ number_format($document->jumlah) }},-</td>
                    </tr>
                    <tr>
                        <td width="150px">Untuk pembayaran</td>
                        <td width="10px">:</td>
                        <td>Biaya perjalanan dinas ke wilayah Bogor selama {{ $document->lama_pd }} hari kerja tanggal {{ Carbon\Carbon::parse($document->tanggal_berangkat)->format('d M Y')."-".Carbon\Carbon::parse($document->tanggal_kembali)->format('d M Y') }}.</td>
                    </tr>
                    <tr>
                        <td width="150px">Berdasarkan SPD</td>
                        <td width="10px">:</td>
                        <td>Pejabat Pembuat Komitmen Balai Teknik Perkeretaapian Wilayah Jawa Bagian Barat Nomor : {{ $document->nomor_spd }}</td>
                    </tr>
                    <tr>
                        <td width="150px">Tanggal</td>
                        <td width="10px">:</td>
                        <td>{{ Carbon\Carbon::parse($document->tgl_doc_keluar)->format('d M Y') }}.</td>
                    </tr>
                    <tr>
                        <td width="150px">Untuk perjalanan dinas dari</td>
                        <td width="10px">:</td>
                        <td>{{ $document->tempat_berangkat }} ke {{ $document->tempat_tujuan }}</td>
                    </tr>
                    <tr>
                        <td width="150px" style="font-weight: 900;">Terbilang</td>
                        <td width="10px" style="font-weight: 900;">:</td>
                        <td style="text-transform: capitalize; font-weight: 900;">{{ terbilang($document->jumlah)." Rupiah" }}</td>
                    </tr>
                </tbody>
            </table>

            <table style="margin: 20px auto;" class="text-center">
                <tr>
                    <td width="180px">Setuju dibayar</td>
                    <td width="180px">Lunas dibayar Tgl,22 Feb 2022</td>
                    <td width="180px">Bandung, 22 Februari 2014</td>
                </tr>
                <tr>
                    <td>Pejabat Pembuat Komitmen</td>
                    <td>Bendahara Pengeluaran</td>
                    <td>Yang menerima</td>
                </tr>
                
                {{-- SPACER --}}
                <tr>
                    <td colspan="3" height="50px"></td>
                </tr>

                <tr>
                    <td class="con-1">RITA WIDAYANTI, S.E., M.M.</td>
                    <td class="con-1">ENTIN SUTINAH, SE.</td>
                    <td class="con-1">{{ $document->pegawai->nama }}</td>
                </tr>
                <tr class="con-2">
                    <td>Penata Tk.I (III/d)</td>
                    <td>Penata Muda (III/a)</td>
                    <td>{{ $document->pegawai->pangkat }}</td>
                </tr>
                <tr class="con-2">
                    <td>NIP. 19720112 199203 2 002</td>
                    <td>NIP. 19840628 200912 2 004</td>
                    <td>{{ $document->pegawai->nip }}</td>
                </tr>
            </table>

        </div>
    </div>
</div>
<div style="page-break-after: always;"></div>