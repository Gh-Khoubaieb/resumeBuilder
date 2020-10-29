@extends('layouts.app')

@section('content')
    <div class="container">

    <h2>Tell us something about you !</h2>

    <form action="/user-detail"  method="POST">
    @csrf
        {{--
        @include('partials.input',['name' => 'fullname'])
        @include('partials.input',['name' => 'email'])
        @include('partials.input',['name' => 'phone'])
        @include('partials.input',['name' => 'address'])
        --}}

        <x-form.text name="fullname"></x-form.text>
        <x-form.text name="email" type="email"></x-form.text>
        <x-form.text name="phone" ></x-form.text>
        <x-form.text name="address"></x-form.text>

        <label for="summary"> Summary</label>
        <textarea name="summary" id="" class="form-control" rows="4">
        </textarea>
        <hr>
        <input type="submit" class="btn btn-primary" type="submit">
    </form>
    </div>
@endsection
