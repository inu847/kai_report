<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['pegawai_id',
                            'nip',
                            'pangkat',
                            'jabatan',
                            'umur',
                            'tingkat_biaya_pd',
                            'maksud_pd',
                            'tempat_berangkat',
                            'tempat_tujuan',
                            'lama_pd',
                            'tanggal_berangkat',
                            'tanggal_kembali',
                            'pengikut',
                            'pembebanan_anggaran',
                            'tgl_doc_keluar',
                            'nomor_spd',
                            'biaya_penginapan',
                            'biaya_uang_harian',
                            'biaya_transport',
                            'jumlah',
                            'beban_mak',
                            'nomor_spt'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id', 'id');
    }
}
