@extends('layouts.app')

@section('content')
    <h1>Daftar Pengajuan Surat</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nomor Surat</th>
                <th>Nama Pengaju</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengajuan as $item)
                <tr>
                    <td>{{ $item->nomor_surat }}</td>
                    <td>{{ $item->user->nama }}</td>
                    <td>{{ $item->tanggal_pengajuan }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
