<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use App\Models\User;
use App\Models\TemplateSurat;

class PengajuanSuratController extends Controller
{   
    public function user() {
    return $this->belongsTo(User::class);
    }

    public function template() {
    return $this->belongsTo(TemplateSurat::class, 'template_id');
    }

    public function index()
    {
        $pengajuan = PengajuanSurat::with('user', 'template')->get();
        return view('pengajuan.index', compact('pengajuan'));
    }
}
