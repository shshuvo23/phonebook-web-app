@extends('home.master')

@section('body')
    <section class="py-5">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-12 py-5 text-white text-center">
                     <h1>PhoneBook App</h1>
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">Signup or signin</a>

                </div>
            </div>
        </div>

    </section>
@endsection


