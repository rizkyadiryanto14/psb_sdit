@extends('layouts.frontend.app')

@section('title')
    Kontak Kami - PPDB Sekolah Darma Bangsa
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Kontak Kami</h4>
    </div>
    <div class="card-content pb-4">
        <div class="recent-message d-flex px-4 py-3">
            <div class="avatar avatar-lg">
                <img src="{{ asset('assets/images/faces/4.jpg') }}">
            </div>
            <div class="name ms-4">
                <h5 class="mb-1">Email</h5>
                <h6 class="text-muted mb-0">@johnducky</h6>
            </div>
        </div>
        <div class="recent-message d-flex px-4 py-3">
            <div class="avatar avatar-lg">
                <img src="{{ asset('assets/images/faces/5.jpg') }}">
            </div>
            <div class="name ms-4">
                <h5 class="mb-1">No. Telephone</h5>
                <h6 class="text-muted mb-0">@imdean</h6>
            </div>
        </div>
        <div class="recent-message d-flex px-4 py-3">
            <div class="avatar avatar-lg">
                <img src="{{ asset('assets/images/faces/1.jpg') }}">
            </div>
            <div class="name ms-4">
                <h5 class="mb-1">Whatsapp</h5>
                <h6 class="text-muted mb-0">@dodoljohn</h6>
            </div>
        </div>
    </div>
</div>
@endsection