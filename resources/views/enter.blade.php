@extends('layouts.app')

@section('title')
    Маълумотларни киритиш
    @endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Маълумотларни киритиш!</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{route('enter-form')}}" method="post">
                            @csrf
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                    </ul>
                                </div>
                                @endif
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="enter the name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" placeholder="enter the email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="subject">Theme message</label>
                                <input type="text" name="subject" placeholder="enter the subject" id="subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control" placeholder="Enter the message"></textarea>
                            </div>
                            <button type="submit" class="btn-success">Send</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
