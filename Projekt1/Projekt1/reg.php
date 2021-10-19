<?php
include('classes.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
  $con=new Connection();
  $reg=new RegCheck($_POST['uName'],$_POST['uPass'],$_POST['uFullName'],$_POST['uEmail']);
}
?>

<h2>Regisztráció</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>?id=reglap" method="POST">
  
  <div class="form-group">
    <label >Felhasználónév</label>
    <input type="text" class="form-control" required pattern="[a-zA-Z'-'\s] placeholder="Gépeld be a felhasználó neved">
    <small id="unameHelp" class="form-text text-muted">A felhasználó neved ékezetet ne tartalmazzon!</small>
  </div>

  <div class="form-group">
    <label>Jelszó</label>
    <input type="password" id="ConfirmPassword" class="form-control" title="Figyelj oda a kis és nagy betűkre!" required pattern="[a-zA-Z'-'\s] placeholder="Ide jöhet a jelszavad!">
  </div>

  <div class="form-group">
    <label >Jelszó mégegyszer</label>
    <input type="password"  id="Password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required placeholder="Ismételd meg a jelszavad!">
  </div>
 
  <!--<div id="msg"></div> jelszó vizsgálat megjelenítése -->
  <div id="msg"></div>

  <!--Jeszó vizsgálat eredményének a megjelenítése-->
  <div id="msg"></div>

  <script>

    //A két jeszó mező összehasonlítása
    //Az első jelszó mező id="Password"
    //A A második jelszó mező id="ConfirmPassword"
    $(document).ready(function(){

      $("#ConfirmPassword").keyup(function(){

   if 
      ($("#Password").val() != $("#ConfirmPassword").val())
       {
       $("#msg").html("Password do not match").css("color","red");
       }
    else
       {
       $("#msg").html("Password matched").css("color","green");
       }

      });


      $("#Password").keyup(function(){

   if 
       ($("#Password").val() != $("#ConfirmPassword").val())
      {
         $("#msg").html("Password do not match").css("color","red");  
      }    
   else
      {
        $("#msg").html("Password matched").css("color","green");
      }
     
     
      });
    });
  </script>


  <div class="form-group">
    <label >Teljes név</label>
    <input type="text" class="form-control"  required placeholder="Gépeld be a neved">
    <small id="nameHelp" class="form-text text-muted">Kérem a teljes neved!</small>
  </div>

  <div class="form-group">
    <label >Email cím</label>
    <input type="email" class="form-control" required placeholder="Gépeld be az email címed!">
    <small id="emailHelp" class="form-text text-muted">Ide jöhet az email címed, figyelj a formátumra!</small>
  </div>


  <button type="submit" class="btn btn-primary">Regisztrálás</button>

</form>