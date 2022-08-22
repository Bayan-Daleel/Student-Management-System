<div class="card mb-3">
    <img src="https://en.shafaqna.com/wp-content/uploads/2022/01/CUE_international-day-of-ed2-1.jpg" class="card-img-top" alt="image student" >
    <div class="card-body">
        <h5 class="card-title">List Off Student</h5>
        <p class="card-text">You can find here all student information</p>
    </div>
</div>

<table class="table">
    <thead class="table-dark">
    <tr>
        <th scope="col">CNE</th>
        <th scope="col">FirstName</th>
        <th scope="col">secondNmae</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Opretions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
    <tr>
        <td>{{$student->cne}}</td>
        <td>{{$student->firstName}}</td>
        <td>{{$student->secondName}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->speciality}}</td>
        <td>
           {{-- <a href="{{url('/edit/.$student->id')}}" class="btn btn-sm btn-warning mb-2">Edit</a>--}}
            <a href="/edit/{{ $student->id}}" class="btn btn-sm btn-warning mb-2">Edit</a>
            <a href="/destroy/{{ $student->id}}" class="btn btn-sm btn-danger mb-2">Delete</a>

        </td>

    </tr>

    @endforeach
    </tbody>
</table>
