@extends('layouts.default')

@section('content')

    <div class="card at-3 pl-2 pr-2">

        <div class="card-title"><h1>Contact</h1><p class="lead">Use the form to submit your questions.</p></div>

            <div class="card-body">


                <form action="/contact" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>

                    <div class="form-group">
                        <label for="body">Message</label>
                        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>

            </div>
        </div>


@endsection