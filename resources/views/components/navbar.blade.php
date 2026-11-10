<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
@props(['username' => null])

<nav class="navbar">
    <a class="brand" href="{{ $username ? route('dashboard', ['username' => $username]) : route('login') }}">TehYung</a>

    @if ($username)
        <div class="nav-links">
            <a href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan</a>
            <a href="{{ route('profile', ['username' => $username]) }}">Profil</a>
            <a href="{{ route('login') }}">Logout</a>
        </div>
    @endif
</nav>
