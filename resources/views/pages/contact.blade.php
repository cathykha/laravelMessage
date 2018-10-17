@extends('layouts.default')

@section('content')

    <h1>Contact</h1>

    <div class="mt-5">
    <form role="form" id="contact-form" class="contact-form" action="{{route('contact.store')}}" method='POST'>
        {{ csrf_field() }}
        <div>
            <div class="form-group">
                <input name="name" id="name" class='form-control col-6' placeholder="Name">
            </div>
            <div class="form-group">
                <input name="email" type="email" class='form-control col-6' id="email" placeholder="Email">
            </div>
        </div>
        <div>
            <div class="form-group">
                <textarea name="body" class="form-control col-6" id="body" rows="3" id="message" placeholder="Message"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-dark mb-2">Submit</button>
    </form>
    </div>


@endsection