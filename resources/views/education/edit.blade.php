@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Education details</h2>


    <form action="{{route('education.update', $education)}}"  method="POST">
    @csrf
        @method('PUT')
        <input type="text" name="school_name" placeholder='school name' value="{{$education->school_name}}">
        <input type="text" name="school_location" placeholder='school location' value="{{$education->school_location}}">
        <input type="text" name="degree" placeholder='degree' value="{{$education->degree}}">
        <input type="text" name="field_of_study" placeholder='field of study' value="{{$education->field_of_study}}">
        <input type="date" name="graduation_start_date" value="{{$education->graduation_start_date}}">
        <input type="date" name="graduation_end_date" value="{{$education->graduation_end_date}}">
        <input type="submit" value="Save Education" class="btn-sm btn btn-success mt-2">
    </form>
    </div>
@endsection
