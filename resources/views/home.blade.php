@extends('layout')

@section('title', "Home")

@section('container')
    <h1>SanberBook</h1>

    <h2>Social Media Developer Santai Berkualitas</h2>

    <p>Belajar dan Berbagi agar hidup ini semakain santai berkualitas</p>

    <h3>Benefit Join di SanberBook</h3>
    <ul>
        <li>Mendapatkan motivasi dari sesama developer</li>
        <li>Sharing knowledge dari para mastah Sanber</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>

    <h3>Cara Bergabung ke SanberBook</h3>
    <ol>
        <li>Mengunjungi Website ini</li>
        <li>Mendaftar di <a href="{{url('/register')}}">Form Sign Up</a></li>
        <li>Selesai!</li>
    </ol>
@endsection
    
