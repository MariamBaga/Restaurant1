@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Réinitialiser le mot de passe</h2>
    <form action="{{ route('password.store') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Nouveau mot de passe" required>
        <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
        <button type="submit">Réinitialiser</button>
    </form>
</div>
@endsection
