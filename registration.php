<!DOCTYPE html>
<html>
<head>
<title>
Registration
</title>
</head>
<form action="/User-Profile-Form.HTML/action_page.php" method="post">
<body>
<fieldset>
<legend>Basic Information</legend>
<center>
<tr>
<th><lable for="name">Name:</lable></th>
<td><input type="text" id="name" name="name"></td><br><br>
</tr>

<tr>
<th><lable for="gender">Gender:</lable></th>
<td>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female"
<label for="female">Female</label><br><br>
</td>
</tr>
<tr>
<th>DoB</th>
<td><input type="date" id="dob" name="dob"></td><br><br>
</tr>
<tr>
<th>
<label for="rel">Religion:</label>
</th>
<td>
  <select name="rel" id="rel">
    <option value="muslim">Muslim</option>
    <option value="hindu">Hindu</option>
    <option value="chistian">Chirtian</option>
    <option value="buddist">Buddsit</option>
  </select>
  </td>
  <br><br>
</tr>
<tr>
<td><label for="father"> Father's name:</label></td>
<td><input type="text" id="father" name="father"></td><br><br>
</tr>

<tr>
<td><label for="mother"> Mother's name:</label></td>
<td><input type="text" id="mother" name="mother"></td><br><br>
</tr>
<input type="submit" name="submit" value="Submit">
<input type="reset">

</center>
</fieldset>
</body>
</form>
</html>