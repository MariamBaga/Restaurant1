@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Vérification de l'email</h2>
    <p>Un email de vérification a été envoyé. Veuillez vérifier votre boîte de réception.</p>
    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
        <button type="submit">Renvoyer l'email de vérification</button>
    </form>
</div>
@endsection
