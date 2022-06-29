@extends('layouts.main')

@section('title')
    Dokumen Pegawai
@endsection

@section('content')
    <div class="document pt-5 pb-5">
        <div class='card'>
            <div class='card-header'>
                Dokumen Pegawai
            </div>
            <div class='card-body'>
                <table id="example1" class="table">
                    <thead>
                        <tr>
                            <th>Nomor SPD</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Pangkat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($documents as $document)
                            <tr>
                                <td>{{ $document->nomor_spd }}</td>
                                <td>{{ $document->pegawai->nama }}</td>
                                <td>{{ $document->pegawai->nip }}</td>
                                <td>{{ $document->pegawai->jabatan }}</td>
                                <td>{{ $document->pegawai->pangkat }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                            <i class="nav-icon fas fa-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            {{-- <li><a class="dropdown-item" href="#">Edit</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li> --}}
                                            <li><a class="dropdown-item" href="{{ route('dashboard.fullPdf', [$document->id]) }}">Export Pdf</a></li>
                                            <li><a class="dropdown-item" href="{{ route('export.swakelola', [$document->id]) }}">Export Excel</a></li>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>