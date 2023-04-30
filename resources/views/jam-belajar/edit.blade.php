@extends('layouts.master')

{{-- apabila 1 baris --}}
@section('title' , 'Dashboard')

@push('page-css')
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }} ">
@endpush

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Jam Belajar</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Teachers</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informasi Jam Belajar</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jam-belajar.update', $jamBelajar->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hari</label>
                                        <select class="select" name="hari" required>
                                            <option readonly selected value="{{$jamBelajar->hari}}">
                                                {{$jamBelajar->hari}}</option>
                                            <option value="senin">Senin</option>
                                            <option value="selasa">Selasa</option>
                                            <option value="rabu">Rabu</option>
                                            <option value="kamis">Kamis</option>
                                            <option value="jumat">Jumat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah Jam</label>
                                        <input type="text" class="form-control" name="jumlah_jam"
                                            placeholder="Masukan jumlah jam" value="{{$jamBelajar->jumlah_jam}}"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <p>Copyright © 2022 Dreamguys.</p>
    </footer>

</div>
@endsection

@push('page-scripts')
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }} "></script>
@endpush