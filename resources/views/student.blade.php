<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <section style="padding-top:20px">
        <div class="container">
            <div class="row">
                <div class="col-md-9 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            All Students
                            <a href="{{'add-student'}}" class="btn btn-success" style="float:right">Add Student</a>
                        </div>
                       <div class="card-body">
                           @if(Session::has('student_delete'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('student_delete')}}
                            </div>
                           @endif
                           <table class="table table-stripped ">
                               <thead>
                                   <tr>
                                       <th>id</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach($students as $student)
                                   <tr>
                                       <td>{{ $student->id}}</td>
                                       <td>{{ $student->name}}</td>
                                       <td>{{ $student->email}}</td>
                                       <td>
                                           <a href="/student/{{$student->id}}" class="btn btn-info">Details</a>
                                           <a href="/edit-student/{{$student->id}}" class="btn btn-success">Edit</a>
                                        <a href="/delete-student/{{$student->id}}" class="btn btn-danger">Delete</a>
                                          
                                            
                                        </td>
                                   </tr>
                                   @endforeach
                               </tbody>
                           </table>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>