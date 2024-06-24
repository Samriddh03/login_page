<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>CMPDI</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP CRUD OPERATION</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="create.php">Add New </a>
            </li>
        </ul>
    </div>
    </div>
    </nav>
    <div class="container my-4"></div>
    <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Joining Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include "connection.php";
      $sql = "select * from crud1";
      $result = $conn->query($sql);
      if(!$result){
        die("Invalid querry");
      }
      while($row = $result->fetch_assoc()){
        echo "
    <tr>
      <th>$row[id]</th>
      <td>$row[name]</td>
      <td>$row[email]</td>
      <td>$row[phone]</td>
      <td>$row[Join_date]</td>

      <td>
                        <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>


    </tr>
    ";
      }
      ?>
  </tbody>
</table>
    </div>
  </body>
</html>