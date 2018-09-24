<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">  
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach($studentprofiles as $studentprofile)
        <tr>
            <td>{{$studentprofile->name}}</td>
            <td>{{$studentprofile->address}}</td>
            <td>{{$studentprofile->email}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
