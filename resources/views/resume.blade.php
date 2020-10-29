<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        body {
            font-size: 17px;
        }
        h2{
            color: #002e58;
            font-weight: 100;

            padding: 20px 0;

        }

        h1 {
            font-family: "Comic Sans MS", cursive, sans-serif;
            text-transform: uppercase;
            color: #1f6fb2;
            font-weight: 200;
            padding: 20px 0;
            font-size: 50px;
            text-decoration: underline;
        }
        h3 {
            color: #3490dc;
        }

        .border1  {
            border-radius: 20px;
            border : 1px dashed midnightblue;
        }
        .summary {
            font-family: Bradley Hand, cursive;
        }
        .container1 {
            width: 70%;
            margin: 0 auto;
            border: 1px solid black;
        }
        .blue {
            background-color: #002e58;
        }
    </style>
    <title>Resume</title>
</head>
<body>
<div class="container1">
<div class="row mb-3">

<div class="col-2 blue ml-3">

</div>

    <div class="col-9 ml-1">


    <section class="heading">

        <h1> {{$user->detail->fullname}}</h1>

        <p> <i class="far fa-envelope"></i>
            Email: {{$user->detail->email}}
        </p>
        <p><i class="fas fa-mobile-alt"></i>
            Phone: {{$user->detail->phone}}
        </p>
        <p> <i class="fas fa-map-marker-alt"></i>
             Address: {{$user->detail->address}}
        </p>

    </section>


    <section class="summary border1 m-1 pl-2">
        <div class="col-3">
            <h2> <i class="fas fa-file-signature"></i> Summary</h2>
        </div>

        <div class="col-12">
            <p class="summary m-2">
                {{$user->detail->summary}}
            </p>
        </div>





    </section>

    <section class="education border1 m-2 pl-3">

        <h2 > <i class="fas fa-graduation-cap"></i> Education</h2>
        @foreach($user->education as $e)
            <h3>Degree : {{$e->degree}}</h3>
            <p>School : {{$e->shool_name}}</p>
            <p>Start Date : {{$e->graduation_start_date}}</p>
            <p>Graduation Date : {{$e->graduation_end_date}}</p>
        @endforeach
    </section>

    <section class="work border1 m-2 pl-3">
        <h2 > <i class="fas fa-briefcase"></i>  Work History</h2>
        <div class="">
            @foreach($user->experiences as $work)

              <h3> <i class="fas fa-marker 2x"></i> Job Title : {{$work->job_title}}</h3>
                <p>Employer : {{$work->employer}}</p>
                <p>Start Date : {{$work->start_date}}</p>
                <p>End Date : {{$work->end_date}}</p>
            @endforeach
        </div>

    </section>

    <section class="skills border1 m-2 pl-3 mb-2">

        <h2> <i class="fas fa-puzzle-piece"></i> Skills</h2>
        <div >
        @foreach($user->skills as $skill)
            <ul >
                <li> {{$skill->name}} ( {{$skill->rating}} out of 5)</li>
            </ul>
        @endforeach
        </div>
    </section>
    </div>
</div>
</div>

</body>
</html>
