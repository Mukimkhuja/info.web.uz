@extends('layouts.app')
@section('title')
    Register
    @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('enter-page')}}">Маълумотларни киритиш!</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @include('inc.messages')
                    Сиз тизимда муваффаққиятли рўйхатдан ўтдингиз, тизимда маълумот киритиш учун юқорида берилган <i>Маълумотларни киритиш</i>га босинг!!!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
