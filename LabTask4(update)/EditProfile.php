<!DOCTYPE html>
<html>
    <head>
        
        <title>Edit The Profile</title>
        
    </head>
    <body>
        <?php include 'headerlogin.php' ?>
<fieldset>
    <legend align="center" style="font-size: 3.0em">PROFILE</legend>
    <br>
              <?php include 'sidebar.php' ?>

<fieldset>
    <legend align="center" style="font-size: 3.0em">Edit The Profile</legend>
             <form action="editprofile.php" method="post" align="center">

               
<table cellpadding="3" width="55%" bgcolor="#9C9C9C" align="center"cellspacing="3">
    <tr>
      <td>NAME</td>
      <td><input type="text" name="name" size="50" required="1"></td>
    </tr>

    <tr>
      <td>EMAIL</td>
      <td><input type="text" name="email" size="50" required="1"></td>
    </tr>

    <tr>
      <td>DATE OF BIRTH</td>
      <td><input type="Date" name="dateofbirth" size="50" min="1950-01-01" max="2000-01-01" required="1"></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><input type="radio" name="gender" value="Male" size="40" >Male
      <input type="radio" name="gender" value="Female" size="40" >Female
      <input type="radio" name="gender" value="Other" size="40" >Other
      
    </td>
    </tr>

    <tr></tr>
        <tr>
          <td></td>
          <td><input type="Submit" name="submit" value="Submit"</td>
        </tr>

  </table>
 
   </fieldset>
      </fieldset>

       
   </body>
   <?php include 'footer.php' ?>
          
</html>