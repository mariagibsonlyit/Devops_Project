<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Application</title>

</head>

<body>

<div class="container">

<header>
   
</header>


<article>
  <main>
<h1>Application Page</h1>
 <p>
      <label>
        
      <br>
    </p>
    <form method="post" action="">
    <label>First Name: </label>&nbsp
    <input type="text" name="fName">&nbsp
    <br>
    <br>
    <label>Last Name: </label>&nbsp
    <input type="text" name="lName">&nbsp
    <label>Phone: </label>&nbsp
    <input type="text" name="phone">
    <br>
    <br>
    <label>Sex:
        <input type="radio" name="sexRadioGrp" value="radio" id="addRemoveRadioGrp_0">
        Male</label>
        <label>
        <input type="radio" name="sexRadioGrp" value="radio" id="addRemoveRadioGrp_1">
        Female</label>
        <br>
        <br>
    <label>Age: </label>&nbsp
    <input type="text" name="age">&nbsp
    <br>
    <br>
    <label>Email: </label>&nbsp
    <input type="text" name="email">&nbsp
    <br>
    <br>
    <label>Do you smoke:
        <input type="radio" name="smokeRadioGrp" value="radio" id="smokeRadioGrp_0">
        Yes</label>
        <input type="radio" name="smokeRadioGrp" value="radio" id="smokeRadioGrp_1">
        No</label>
    <br>
    <br>
    <input type="submit" value="Apply">
    </form>

<!-- <?php 

//This is not complete, when database is finalised will be changed to suit it. This is just a example of how to send data to database.

if ( ! empty ($_POST )){
    $mysqli = new mysqli ('localhost','root', '', '');

    if( $mysqli->connect_error ){
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
    }

    $sql = "INSERT INTO users (fName, lName, phone, age, email,) VALUES ( '{$mysqli->real_escape_string($_POST['fName'])}', '{$mysqli->real_escape_string($_POST['lName'])}', '{$mysqli->real_escape_string($_POST['phone'])}', '{$mysqli->real_escape_string($_POST['age'])}', '{$mysqli->real_escape_string($_POST['email'])}' )";
    $insert = $mysqli->query($sql);

    $mysqli->close();
}
?> -->

  </main>
</article>

<footer></footer>

</div>
</body>
</html>
