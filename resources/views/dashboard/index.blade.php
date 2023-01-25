@extends('layouts/main')

@section('style')
<link rel="stylesheet" href="/css/dashboard.css">

@section('container')
<h1>Welcome {{ auth()->user()->name }} Tamvan</h1>
<div class="layout-admin">
    <div class="sidebars">
        <ul>
            <div class="kotakss">
                <li><a class="beranda {{ ($active === "dashboard") ? 'active' : '' }}"" href="/">Dashboard</a></li>
            </div>
            <div class="kotakss">
                <li><a class="beranda {{ ($active === "dashboard-lomba") ? 'active' : '' }}"" href="/">Lomba</a></li>
            </div>
            <div class="kotakss">
                <li><a class="beranda {{ ($active === "dashboard-acara") ? 'active' : '' }}"" href="/">Acara</a></li>
            </div>
            <div class="kotakss">
                <li><a class="beranda {{ ($active === "dashboard-seminar") ? 'active' : '' }}"" href="/">Seminar</a></li>
            </div>
            <div class="kotakss">
                <li><a class="beranda {{ ($active === "dashboard-admin") ? 'active' : '' }}"" href="/">Admin</a></li>
            </div>
        </ul>
    </div>
    <div class="main-contents">
    </div>
</div>

@endsection