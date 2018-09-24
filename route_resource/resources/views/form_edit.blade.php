<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student Profile</h2>
  <form action="/studentprofiles/{{$student->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" required class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$student->name}}">
      </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea name="address" class="form-control">{{$student->address}}</textarea>
      </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"  value="{{$student->email}}">
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </form>


<form action="/studentprofiles/{{$student->id}}" method="POST">
  @csrf
  @method('DELETE')    
  <h3>{{$student->id}}</h3>
  <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
</body>
</html>
