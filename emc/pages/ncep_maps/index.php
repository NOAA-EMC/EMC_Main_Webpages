<?php include 'header.php'  ?>
<form action="./login.php" id="loginForm" method="post">
  <div class="form-group" >
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control"  name="username" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter Password">
  </div>
  <form action="../../login.php" method="post">
    <button type="submit" name="loginBtn" class="btn btn-primary loginB">Submit</button>
</form>