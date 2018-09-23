<!DOCTYPE html>
<html>
<head>
  <h1>Exercise 3</h1>
</head>
<body>
<form action="results.php" class="form" method="post">

<label for="firstName" id="firstNameLabel">First name:</label>
  <input type="text" name="firstName" id="firstName" required data-msg="Enter your First Name">

<label for="firstName" id="firstNameLabel">Last name:</label>
  <input type="text" name="lastName" id="lastName" required data-msg="Enter your Last Name">

<label for="email" id="emailLabel">Email:</label>
  <input type="email" name="email" id="email" required data-msg="Enter your email">

<input type="submit" name="submitButton" class="button" value="submit" />
</form>
</body>
</html>
