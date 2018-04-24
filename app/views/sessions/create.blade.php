@extends('layouts.default')
@section('content')
    @include('layouts.default.title')
    @include('layouts.default.alerts')

    <div class="row">
        <div class="col-lg-8 col-centered">
            <p>Sign in to the LANager with your Steam ID</p>
        </div>
        <div class="col-lg-8 col-centered">
            <a href="{{ $steamAuthUrl }}" title="Click here to sign into the LANager using your Steam ID">
                <img src="{{ asset('/img/sits_02.png') }}" alt="Sign in through Steam Logo">
            </a>
        </div>
        <div class="col-lg-8 col-centered">
            <p>
                <small>Don't have a Steam account? You can <a href="https://store.steampowered.com/join/" target="_blank">create an
                        account for free</a>.
                </small>
            </p>
        </div>
    </div>

@endsection
