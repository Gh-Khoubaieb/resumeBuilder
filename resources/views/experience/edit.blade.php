@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Work details</h2>


    <form action="{{route('experience.update', $experience)}}"  method="POST">
    @csrf
        @method('PUT')
        <input type="text" name="job_title" placeholder='school name' value="{{$experience->job_title}}">
        <input type="text" name="employer" placeholder='school location' value="{{$experience->employer}}">
        <input type="text" name="city" placeholder='degree' value="{{$experience->city}}">
        <input type="text" name="state" placeholder='field of study' value="{{$experience->state}}">
        <input type="date" name="start_date" value="{{$experience->start_date}}">
        <input type="date" name="end_date" value="{{$experience->end_date}}">
        <input type="submit" class="btn-success btn btn-sm mt-3" value="Save Experience">
    </form>
    </div>
@endsection
