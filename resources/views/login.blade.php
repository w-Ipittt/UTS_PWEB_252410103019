<!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
 @extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="card login-card">
    <h2>Welcome to TehYung</h2>
    <p class="muted">Login untuk mengelola menu dan stok TehYung.</p>

    <form method="POST" action="{{ route('login.process') }}">
        @csrf

        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Contoh: TehYung03">
        @error('username') <div class="error">{{ $message }}</div> @enderror

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Minimal 4 karakter">
        @error('password') <div class="error">{{ $message }}</div> @enderror

        <button type="submit" class="btn">Masuk</button>
    </form>
</section>
@endsection
