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
                            @include('inc.messages')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" placeholder="enter the name" id="name" class="form-control-sm">

                                <label for="email">Email</label>
                                <input type="text" name="email" placeholder="enter the email" id="email" class="form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="subject">Theme message</label>
                                <input type="text" name="subject" placeholder="enter the subject" id="subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control" placeholder="Enter the message"></textarea>
                            </div>
                            2-jadvalga kiritish:
                            <div class="form-group">
                                <label for="pname">Patient name</label>
                                <input type="text" name="pname" placeholder="enter the patient name" id="pname" class="form-control-sm">

                                <label for="fname">Patient f name</label>
                                <input type="text" name="pname" placeholder="enter the patient f name" id="fname" class="form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="sname">Patient s name</label>
                                <input type="text" name="sname" placeholder="enter the patient surname" id="sname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sex">Patient's sex</label>
                                <input type="text" name="sex" placeholder="enter the patient sex" id="sex" class="form-control-sm">

                                <label for="age">Patient age</label>
                                <input type="number" name="sex" placeholder="enter the patient age" id="age" class="form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="weight">Patient's weight</label>
                                <input type="number" name="weight" placeholder="enter the patient weight" id="weight" class="form-control-sm">

                                <label for="height">Patient height</label>
                                <input type="number" name="height" placeholder="enter the patient height" id="height" class="form-control-sm">
                            </div>
                            <button type="submit" class="btn-success">Send</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
