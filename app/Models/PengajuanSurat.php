<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanSurat extends Model
{
    protected $table = 'pengajuan_surat';

    protected $fillable = [
        'user_id',
        'template_id',
        'nomor_surat',
        'tanggal_pengajuan',
        'status',
        'file_hasil_path'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function template() {
        return $this->belongsTo(TemplateSurat::class, 'template_id');
    }
}
