<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stude Mangment</title>
   <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
@include("navbar")
<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>

@if($layout=='index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                @include("studentlist")
            </section>
        </div>
        </div>
    </div>
@elseif($layout=='create')
    <div class="container-fluid mt-4">
    <div class="row">
        <section class="col-md-7">
            @include("studentlist")
        </section>
        <section class="col-md-5">
            <div class="card mb-3">
                <img src="https://lh3.googleusercontent.com/ri6RP6vv9HnVpOJ9vX0o58LT1whfLKDGQ0XIxT5FYTJ_IA_woedwgYY2q-N-u5gX0NHgX8vOb2CGfQ1c02cScFaRf5GcUP07zNXy=w1440-v1-e30">
                <div class="card-body">
                    <h5 class="card-title">Enter The Information Off Student</h5>
                    <form action="{{url('/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label> CNE</label>
                            <input  type="text" name="cne" class="form-control" placeholder="enter cne">
                        </div>
                        <div class="form-group">
                            <label> First Name</label>
                            <input type="text" name="firstName" class="form-control" placeholder="enter FirstName">
                        </div>
                        <div class="form-group">
                            <label>Second Name</label>
                            <input type="text" name="secondName" class="form-control" placeholder="enter SecondName">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control" placeholder="enter Age">
                        </div>
                        <div class="form-group">
                            <label>Speciality</label>
                            <input type="text" name="speciality" class="form-control" placeholder="enter Speciality">
                        </div>
                        <div class="form-group mt-2 ">

                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning " value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    </div>
     </div>
@elseif($layout=='show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5"></section>
        </div>
    </div>
@elseif($layout=='edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="https://lh3.googleusercontent.com/ri6RP6vv9HnVpOJ9vX0o58LT1whfLKDGQ0XIxT5FYTJ_IA_woedwgYY2q-N-u5gX0NHgX8vOb2CGfQ1c02cScFaRf5GcUP07zNXy=w1440-v1-e30" class="card-img-top" alt="image student" >
                    <div class="card-body">
                        <h5 class="card-title">Edit Informations Off Student</h5>
                        <form action="{{url('/update/'.$student->id)}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label> CNE</label>
                                <input  value="{{$student->cne}}" type="text" name="cne" class="form-control" placeholder="enter cne">
                            </div>
                            <div class="form-group">
                                <label> First Name</label>
                                <input  value="{{$student->firstName}}" type="text" name="firstName" class="form-control" placeholder="enter FirstName">
                            </div>
                            <div class="form-group">
                                <label>Second Name</label>
                                <input value="{{$student->secondName}}" type="text" name="secondName" class="form-control" placeholder="enter SecondName">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{$student->age}}" type="text" name="age" class="form-control" placeholder="enter Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="{{$student->speciality}}" type="text" name="speciality" class="form-control" placeholder="enter Speciality">
                            </div>
                            <div class="form-group mt-2 ">

                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning " value="Reset">
                            </div>
                        </form>

                    </div>
                </div>
            </section>
        </div>
    </div>
@endif
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

