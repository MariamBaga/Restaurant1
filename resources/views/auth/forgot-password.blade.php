@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Mot de passe oublié</h2>
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Envoyer le lien de réinitialisation</button>
    </form>
</div>
@endsection
