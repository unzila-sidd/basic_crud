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
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add Student
                            <a href="{{'student'}}" class="btn btn-danger" style="float:right">cancel</a>
                        </div>
                        <div class="card-body">
                            @if(Session::has('student_created'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('student_created') }}
                            </div>
                            @endif
                            <form method="POST" action="{{route('student.create')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="student name">Student Name</label>
                                    <input name="name" class="form-control" type="text" placeholder="Enter Student name"/>
                                </div>
                                <div class="form-group">
                                    <label for="student-email">Student Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Enter Student Email"/>
                                </div>
                                <button type="submit" class="btn btn-danger">Add Student</button>
                            </form>
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