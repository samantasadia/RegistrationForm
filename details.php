<!DOCTYPE HTML>
<html>
<head>
<title>
Details
</title>
<style>
th {
  text-align: left;
}
</style>

</head>
<form
<body>
<center>
<h3>Basic Information</h3>
<table border="1">
<tr>
<th> Name </th><td><?php echo $_POST['name'] ?></td>
</tr>
<tr>
<th> Gender </th><td><?php echo $_POST['gender'] ?></td>
</tr>
<tr>
<th> DoB </th><td><?php echo $_POST['dob'] ?></td>
</tr>
<tr>
<th> Religion </th><td><?php echo $_POST['rel'] ?></td>
</tr>
<tr>
<th> Father's name </th><td><?php echo $_POST['father'] ?></td>
</tr>
<tr>
<th> Mother's name</th><td><?php echo $_POST['mother'] ?></td>
</tr>
</table>

<a href="/RegistrationForm/registration.php">Back</a>
</center>
</body>
</html>