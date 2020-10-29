@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Skill details</h2>


    <form action="{{route('skill.update', $skill)}}"  method="POST">
    @csrf
        @method('PUT')
        <input type="text" name="name" placeholder='name' value="{{$skill->name}}">
        <input type="text" name="rating" placeholder='rating' value="{{$skill->rating}}">

        <input type="submit" class="btn btn-success btn-sm" value="Save Skill">
    </form>
    </div>
@endsection
