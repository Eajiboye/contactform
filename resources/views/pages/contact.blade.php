@extends('layouts.default')

@section('content')

    <h1>Contact</h1>
    <p class="lead">Use the form to submit your questions.<br> You can follow us on Facebook and Twitter for the up-to-date information.</p>

    <form action="/contact" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">Message</label>
            <textarea name = "body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>


@endsection