<!DOCTYPE html>
<html>
<head>
<title>
Registration
</title>
<style>
th {
  text-align: left;
}
</style>

</head>
<form action="/RegistrationForm/details.php" method="post">
<body>
<fieldset>
<legend>Basic Information</legend>
<center>
<table>
<tr>
<th><label for="name">Name:</label></th>
<td><input type="text" id="name" name="name"></td>
</tr>

<tr>
<th><label for="gender">Gender:</label></th>
<td>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female"
<label for="female">Female</label>
</td>
</tr>
<tr>
<th><label for="dob">DoB:</label></th>
<td><input type="date" id="dob" name="dob"></td>
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
</tr>
<tr>
<th><label for="father"> Father's name:</label></th>
<td><input type="text" id="father" name="father"></td>
</tr>

<tr>
<th><label for="mother"> Mother's name:</label></th>
<td><input type="text" id="mother" name="mother"></td>
</tr>
</table>
</center>

</fieldset>
<center>
<fieldset>
<legend>Contact Information</legend>
<table>
<tr>
<th><label for="prAdd">present add:</label></th>
<td><input type="text" id="prAdd" name="prAdd"></td>
</tr>

<tr>
<th><label for="perAdd">permanent add:</label></th>
<td><input type="text" id="prAdd" name="prAdd"></td>
</tr>
<tr>
<th><label for="phone">Phone No:</label></th>
<td><input type="tel" id="phone" name="phone"></td>
</tr>
<tr>
<th><label for="email">Email:</label></th>
<td><input type="email" id="email" name="email"></td>
</tr>
<tr>
<th><label for="WebPageLink">Web Page Link:</label></th>
<td><input type="url" id="WebPageLink" name="WebPageLink"></td>
</tr>
</table>
</fieldset>
</center>
<center>
<fieldset>
<legend>Academic Information</legend>
<table>
<tr>
<th><label for="SSCYear">SSC Year:</label></th>
<td><input type="number" id="SSCYear" name="SSCYear"></td>
</tr>
<tr>
<th><label for="SSCInstitution">SSC Institution:</label></th>
<td><input type="text" id="SSCInstitution" name="SSCInstitution"></td>
</tr>
<tr>
<th><label for="HSCYear">HSC Year:</label></th>
<td><input type="number" id="HSCYear" name="HSCYear"></td>
</tr>
<tr>
<th><label for="HSCInstitution">HSC Institution:</label></th>
<td><input type="text" id="HSCInstitution" name="HSCInstitution"></td>
</tr>
</table>
</fieldset>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</center>
</body>
</form>
</html>