<?php
include("header.html");
?>
<!DOCTYPE html>
<html>
<head>
<script>
    var var2 = 'abc123';
    var pass = prompt("Enter the PAssword");
    function checkPASS(){
        var n = var2.localeCompare(pass);
    if((n!=0)){
       window.location = "http://localhost/Sample/add-record-form.php";
       var var3 = "Password";
        alert("Incorrect Password "+ var3); 
    }else{
        var var3 = "abc123";
        alert("Hello "+ var3);   
    }
    }
    checkPASS();
</script>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container">
  <form action="http://localhost/Sample/insert.php">

  <div class="row">
    <div class="col-25">
      <label for="fname">Title</label>
    </div>
    <div class="col-75">
      <input type="text" id="title" name="title" placeholder="Enter Title Here..">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Username</label>
    </div>
    <div class="col-75">
      <input type="text" id="username" name="username" placeholder="Username Here..">
    </div>
    </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Password</label>
    </div>
    <div class="col-75">
      <input type="text" id="password" name="password" placeholder="*******************">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Repeat Password</label>
    </div>
    <div class="col-75">
      <input type="text" id="rpassword" name="rpassword" placeholder="*******************" onclick="">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">URL</label>
    </div>
    <div class="col-75">
      <input type="text" id="url" name="url" placeholder="Your URL..">
    </div>
  </div>

  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>
