<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
  <head> 
    <title>Project 3-4: Member Registration</title> 
  </head> 
  <body> 
    <h2>Project 3-4: Member Registration</h2> 
    <form method="post" action="chapter3register.php"> 
      Name: <br /> 
      <input type="text" name="name" size="50" /> 
      <p> 
      Address: <br /> 
      <textarea name="address" rows="5" cols="40"></textarea> 
      <p> 
      Age: <br /> 
      <input type="text" name="age" size="3" /> 
      <p> 
      Profession: <br /> 
      <input type="text" name="profession" size="50" /> 
      <p> 
Residential status: <br /> 
<input type="radio" name="resident" value="yes" checked="true" /> Resident 
<input type="radio" name="resident" value="no" /> Non-Resident 
<p> 
<input type="submit" name="submit" value="Submit" /> 
</form> 
</body> 
</html>