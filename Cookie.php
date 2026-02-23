<html>
  <head>
    <title>Remember Me for Login using PHP Cookies</title>
  </head>
  <body>
  <?php
    session_start();
    if(isset($_POST["submit"])) {
      /*
       *  Login Code Here...
       */
      if(isset($_POST["chk"]))
      {
        $user=$_POST["uname"];
        $upass=$_POST["upass"];
        setcookie ("login_user",$user,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("login_pass",$upass,time()+ (10 * 365 * 24 * 60 * 60));
      }else{
        setcookie ("login_user","",time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("login_pass","",time()+ (10 * 365 * 24 * 60 * 60));
      }
    }
    $checkedStatus="";
    $cookieUser="";
    $cookiePass="";
    #Get UserName and Password from Cookies 
    if(isset($_COOKIE["login_user"]) && isset($_COOKIE["login_pass"])){
      $cookieUser=$_COOKIE["login_user"];
      $cookiePass=$_COOKIE["login_pass"];
      $checkedStatus="checked";
    }
  ?>
  <form method='post' action='<?php echo $_SERVER["REQUEST_URI"]; ?>'>
    <table>
      <tr><td>User Name </td><td><input type='text' name='uname' class='form-control' value='<?php echo $cookieUser;?>' required ></td></tr>
      <tr><td>Password  </td><td> <input type='password' name='upass'  class='form-control' value='<?php echo $cookiePass;?>' required> </td></tr>
      <tr><td colspan='2'><label><input  <?php echo $checkedStatus;?> type='checkbox'  name='chk'  > Remember Me</label></td></tr>
      <tr><td colspan='2' align='right'><input type='submit' value='Submit' name='submit' class='btn btn-success' ></td></tr>
    </table>
  </form>
  </body>
</html>