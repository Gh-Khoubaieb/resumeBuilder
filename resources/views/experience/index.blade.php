@extends('layouts.app')

@section('content')
        <h2>Work Summary</h2>
       @foreach($experiences  as $e)
           <div class="card">
               <div class="card-body">
                   <h4 class="card-title">
                       {{$e->job_title}}
                       {{$e->start_date}}
                       to
                        {{$e->end_date}}
                   </h4>
                   <ul>
                       <li> {{$e->employer}} </li>
                       <li> {{$e->city}} </li>
                       <li> {{$e->state}} </li>
                   </ul>

                   <a href=" {{route('experience.edit', $e)}} "
                      class="btn btn-primary"
                      role="button">Edit</a>


                   <form action="{{route('experience.destroy', $e)}}" method="POST" style="display: inline" onclick="return confirm('Are you sure?')">
                       @csrf
                       @method('DELETE')

                       <input type="submit" value="Delete" class="btn btn-danger" >
                   </form>
               </div>
           </div>



        @endforeach

        <a href=" {{route('experience.create')}}" class="mt-3" role="button"> +Add another education</a>
        <div class="text-right">
            <a class=" btn btn-primary" href=" {{route('skill.index')}} " role="button">Next</a>
        </div>

@endsection
