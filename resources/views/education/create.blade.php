@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Education details</h2>


    <form action="/education"  method="POST">
    @csrf
        <input type="text" name="school_name" placeholder='school name'>
        <input type="text" name="school_location" placeholder='school location'>
        <input type="text" name="degree" placeholder='degree'>
        <input type="text" name="field_of_study" placeholder='field of study'>
        <input type="date" name="graduation_start_date" >
        <input type="date" name="graduation_end_date" >
        <input type="submit" value="Save Education">
    </form>
    </div>
@endsection
