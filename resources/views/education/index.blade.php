@extends('layouts.app')

@section('content')
        <h2>Education Summary</h2>
       @foreach($education as $e)
           <div class="card">
               <div class="card-body">
                   <h4 class="card-title">
                       {{$e->degree}}
                       {{$e->school_name}}
                        {{$e->graduation_start_date}}
                        {{$e->graduation_end_date}}
                   </h4>
                   <a href=" {{route('education.edit', $e)}} "
                      class="btn btn-primary"
                      role="button">Edit</a>


                   <form action="{{route('education.destroy', $e)}}" method="POST" style="display: inline" onclick="return confirm('Are you sure?')">
                       @csrf
                       @method('DELETE')

                       <input type="submit" value="Delete" class="btn btn-danger" >
                   </form>
               </div>
           </div>



        @endforeach

        <a  href=" {{route('education.create')}} " role="button">+ Add another Education</a>

        <div class="row mt-3">
            <div class="col text-left">
                <a class="btn btn-secondary" href=" {{route('user-detail.index')}} " role="button">Back</a>
            </div>

            <div class="col text-right">
                <a class=" btn btn-primary" href=" {{route('experience.index')}} " role="button">Work History</a>
            </div>
        </div>

@endsection
