<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class = "jumbotron text-center">
  <h2>ATN Company</h2>
</div>
  <p>Customer List</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
    <th></th> 
        

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Duong</td>
        <td>Pham</td>
        <td>duongpc@gmail.com</td>
        <th>
          <button type="button" class="btn">Delete</button>
          <button type="button" class="btn">Edit</button>
      </th>
      </tr>
      <tr>
        <td>Dat</td>
        <td>The</td>
        <td>datbeo@gmail.com</td>
        <th>
          <button type="button" class="btn">Delete</button>
          <button type="button" class="btn">Edit</button>
      </th>
      </tr>
      <tr>
        <td>Hoang</td>
        <td>Nguyen</td>
        <td>hoangnt@gmail.com</td>
        <th>
          <button type="button" class="btn">Delete</button>
          <button type="button" class="btn">Edit</button>
      </th>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>