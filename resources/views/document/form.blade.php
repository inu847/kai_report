@extends('layouts.main')

@section('title')
    Form
@endsection

@section('content')
    <div class="document pt-5 pb-5">
        <div class='card'>
            <div class='card-header'>
                Form Input Data
            </div>
            <div class='card-body'>
                <form action='{{ route('dashboard.store') }}' method='POST' enctype='multipart/form-data'>
                @csrf
                <div class='form-group'>
                    <label for=''>Pilih Pegawai</label>
                    <select name="pegawai" id="pegawai" class='form-control'>
                        <option value="" selected disabled>-Pilih Opsi-</option>
                        @foreach ($pegawais as $pegawai)
                            <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='form-group'>
                    <label for=''>NIP</label>
                    <input type='text' class='form-control' name='nip' readonly>
                </div>
                <div class='form-group'>
                    <label for=''>Pangkat</label>
                    <input type='text' class='form-control' name='pangkat' readonly>
                </div>
                <div class='form-group'>
                    <label for=''>Jabatan</label>
                    <input type='text' class='form-control' name='jabatan' readonly>
                </div>
                <div class='form-group'>
                    <label for=''>Umur</label>
                    <input type='text' class='form-control' name='umur' readonly>
                </div>
                <div class='form-group'>
                    <label for=''>Tingkat Biaya Perjalanan Dinas</label>
                    <input type='text' class='form-control' name='tingkat_biaya_pd' id='' placeholder=''>
                </div>
                <div class='form-group'>
                    <label for=''>Maksud Perjalanan Dinas</label>
                    <textarea name="maksud_pd" id="" cols="30" rows="5" class='form-control'></textarea>
                </div>
                {{-- <div class='form-group'>
                    <label for=''>Tempat berangkat</label>
                    <input type='text' class='form-control' name='tempat_berangkat' id='' placeholder=''>
                </div> --}}
                <div class='form-group'>
                    <label for=''>Tempat tujuan</label>
                    <select name="tempat_tujuan" id="" class='form-control'>
                        <option value="" selected disabled>pilih Tempat Tujuan</option>
                        @foreach ($biayas as $biaya)
                            <option value="{{ $biaya->id }}">{{ $biaya->provinsi }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class='form-group'>
                    <label for=''>Lamanya Perjalanan Dinas</label>
                    <input type='text' class='form-control' name='lama_pd' id='' placeholder=''>
                </div> --}}
                <div class='form-group'>
                    <label for=''>Tanggal berangkat</label>
                    <input type='date' class='form-control' name='tanggal_berangkat' id='' placeholder=''>
                </div>
                <div class='form-group'>
                    <label for=''>Tanggal harus kembali/tiba di tempat baru *</label>
                    <input type='date' class='form-control' name='tanggal_kembali' id='' placeholder=''>
                </div>
                <div class='form-group'>
                    <label for=''>Pengikut</label>
                    <select name="pengikut[]" class='form-control mb-2'>
                        <option value="" selected disabled>-Pilih Opsi-</option>
                        @foreach ($pegawais as $pegawai)
                            <option value="{{ $pegawai->id }}">{{ $pegawai->nama." - NIP.".$pegawai->nip }}</option>
                        @endforeach
                    </select>
                    <div id="pengikut"></div>
                    <button type="button" class="btn btn-primary" id="btn-pengikut">Tambah Pengikut</button>
                </div>
                <div class='form-group'>
                    <label for=''>Pembebanan Anggaran (Akun)</label>
                    <input type='text' class='form-control' name='pembebanan_anggaran' id='' placeholder=''>
                </div>
                <div class='form-group'>
                    <label for=''>Tanggal Dokumen Dikeluarkan</label>
                    <input type='date' class='form-control' name='tgl_doc_keluar' id='' placeholder=''>
                </div>
                <div class='form-group'>
                    <label for=''>Lampiran SPD Nomor</label>
                    <input type='text' class='form-control' name='nomor_spd' id='' placeholder=''>
                </div>
                <div class='form-group'>
                    <label for=''>Biaya penginapan</label>
                    <input type='number' class='form-control' name='biaya_penginapan' id='' placeholder=''>
                </div>
                <div class='form-group'>
                    <label for=''>Biaya Transport PP</label>
                    <input type='number' class='form-control' name='biaya_transport' id='' placeholder=''>
                </div>
                <div class='form-group'>
                    <label for=''>Nomor SPT</label>
                    <input type='number' class='form-control' name='nomor_spt' id='' placeholder=''>
                </div>
    
                <button type='submit' class='btn btn-primary'>Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script>
    $(document).on('change', '#pegawai', function (e) {
        var id = $(this).val();
        $.ajax({
            url: "{{ url('/kai/findPegawai') }}" +"/" + id,
            type: 'GET', 
            dataType  : 'json',
        })
        .done(function(response) {
            $('input[name="nip"]').val(response.nip)
            $('input[name="pangkat"]').val(response.pangkat)
            $('input[name="jabatan"]').val(response.jabatan)
            $('input[name="umur"]').val(response.umur)
        })
        .fail(function() {
            Swal.fire('Ops!', 'Load data failed.', 'error');
        });        
    })

    $(document).on('click', '#btn-pengikut', function () {
        var elem = `<select name="pengikut[]" class='form-control mb-2'>
                        <option value="" selected disabled>-Pilih Opsi-</option>
                        @foreach ($pegawais as $pegawai)
                            <option value="{{ $pegawai->id }}">{{ $pegawai->nama." - NIP.".$pegawai->nip }}</option>
                        @endforeach
                    </select>`
        $('#pengikut').append(elem)
    })
</script>