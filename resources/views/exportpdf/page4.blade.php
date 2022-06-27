<div class='card'>
    <div class="card-header">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/img/kop_surat.png'))) }}" width="100%">
    </div>
    <div class='card-body'>
        <div class="text-center title clear">SURAT PERNYATAAN</div>
        <div class="body">
            <table class="mb-3">
                <tr>
                    <td colspan="3">Yang bertanda tangan dibawah ini :</td>
                </tr>
                <tr>
                    <td width="140px">Nama</td>
                    <td width="10px">:</td>
                    <td>{{ $document->pegawai->nama }}</td>
                </tr>
                <tr>
                    <td width="140px">NIP</td>
                    <td width="10px">:</td>
                    <td>{{ $document->pegawai->nip }}</td>
                </tr>
                <tr>
                    <td width="140px">Pangkat/Gol</td>
                    <td width="10px">:</td>
                    <td>{{ $document->pegawai->pangkat }}</td>
                </tr>
                <tr>
                    <td width="140px">Jabatan</td>
                    <td width="10px">:</td>
                    <td>{{ $document->pegawai->jabatan }}</td>
                </tr>
                <tr>
                    <td width="140px">Nomor dan Tanggal SPT</td>
                    <td width="10px">:</td>
                    <td>SP {{ $document->nomor_spt }} Tahun {{ now()->format('Y') }} Tanggal {{ Carbon\Carbon::parse($document->tgl_doc_keluar)->format('d M Y') }}</td>
                </tr>
            </table>

            <div>
                <p>Dengan ini menyatakan bahwa dokumen / berkas-berkas pertanggungjawaban perjalanan dinas yang saya sampaikan sebagaimana terlampir adalah benar dan dapat dipertanggungjawabkan.</p>
                <p>Apabila bukti-bukti tersebut tidak benar maka saya bersedia dikenakan sanksi sesuai dengan undang-undang yang berlaku.</p>
            </div>
            
            <table style="margin-left: 400px;" class="text-center">
                <tr>
                    <td>Bandung, 24 Mei 2022</td>
                </tr>
                <tr>
                    <td>Yang membuat pernyataan</td>
                </tr>
                
                {{-- SPACER --}}
                <tr>
                    <td colspan="3" height="50px"></td>
                </tr>
    
                <tr>
                    <td colspan="3" class="con-1">{{ $document->pegawai->nama }}</td>
                </tr>
                <tr class="con-2">
                    <td colspan="3">{{ $document->pegawai->pangkat }}</td>
                </tr>
                <tr class="con-2">
                    <td colspan="3">{{ $document->pegawai->nip }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div style="page-break-after: always;"></div>