@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>User details</h2>


    <form action="{{route('user-detail.update', $userDetail)}}"  method="POST">
    @csrf
        @method('PUT')
        {{--
        <input type="text" name="fullname" placeholder='name' value="{{$userDetail->fullname}}">
        <input type="text" name="phone" placeholder='phone' value="{{$userDetail->phone}}">
        <input type="text" name="email" placeholder='email' value="{{$userDetail->email}}">

        <textarea name="summary" id="" cols="30" rows="4">
            {{$userDetail->summary}}
        </textarea>
        --}}

        <x-form.text name="fullname" value="{{$userDetail->fullname}}"></x-form.text>
        <x-form.text name="email" type="email" value="{{$userDetail->email}}"></x-form.text>
        <x-form.text name="phone" value="{{$userDetail->phone}}"></x-form.text>
        <x-form.text name="address" value="{{$userDetail->address}}"></x-form.text>

        <textarea name="summary" id=""  class="form-control"  rows="4">
            {{$userDetail->summary}}
        </textarea>
        <hr>
        <input type="submit" class="btn btn-success" value="Update User">
    </form>
    </div>
@endsection
