<!-- When there is no desire, all things are at peace. - Laozi -->
@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<section class="card profile-card">
    <h1>{{ $username }}</h1>

    @foreach ($profil as $label => $nilai)
        <div class="row">
            <span class="muted">{{ $label }}</span>
            <strong>{{ $nilai }}</strong>
        </div>
    @endforeach
</section>
@endsection
