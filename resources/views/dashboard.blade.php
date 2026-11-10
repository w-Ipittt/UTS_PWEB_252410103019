<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h2>Hola, {{ $username }}!</h2>
<p class="muted">Ringkasan stok menu TehYung hari ini.</p>

<div class="stats">
    @foreach ($stats as $stat)
        @include('partials.stat-card', ['stat' => $stat])
    @endforeach
</div>

<a class="btn" href="{{ route('pengelolaan', ['username' => $username]) }}">Kelola Menu</a>
@endsection
