<!DOCTYPE html>
<html>
    <head>
        
        <title>Change The Password</title>
        
    </head>
    <body>
         <?php include 'headerlogin.php' ?>
<fieldset>
    <br>
             
        <?php include 'sidebar.php' ?>


            <fieldset>
    <legend align="center" style="font-size: 4.5em">Change The Password</legend>
             <form action="changepass.php" method="post" align="center">

               

   <table cellpadding="4" width="55%" bgcolor="#9C9C9C" align="center"cellspacing="2">
    <tr>
      <td><span style="color: Byzantium">Current Password</SPAN></td>
      <td><input type="text" name="cp" size="50" required="1"></td>
    </tr>

    <tr>
      <td><span style="color: blue" >Type The New Password</span></td>
      <td><input type="text" name="np" size="50" required="1"></td>
    </tr>

    <tr>
      <td><span style="color: red">Retype The New Password</span></td>
      <td><input type="text" name="rnp" size="50" required="1"></td>
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
