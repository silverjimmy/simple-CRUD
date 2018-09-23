<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee CRUD App</title>
</head>
<body>
<div class="container">
    <h2>Employee List</h2>
    <form method="post" actio="{{url('employees')}}" enctype="mulipart/form-data">
    @csrf 
    <div class="row">
        <div class="col-md-12">
            <div class="form-group col-md-4">
                <label for="Name">Name:</label>
                <input type="test" class="form-control" name="name">
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="form-group col-md-4">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </div>
    </div>
</div>
    
</body>
</html>