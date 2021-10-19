<!DOCTYPE html>
<html lang="hu">
<head>
  <title>Projekt1</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
  <link rel="stylesheet" href="styles.css">
  <style>
  .sticky
  {
    top:0;
    width: 100%;
    position: relative;
  }

  .div{
    background-color:linen;
    text-align:center;
  }

  h1,h2{
    font-size:10px;
    color:black;
    text-align:center;
  }
  


  </style>

</head>
<body>
      <!--Fejléc-->
      <div class='jumbotron text-center' style='margin-bottom:0'>
      <h1>Projekt 1.0</h1>
      </div>     
      

      <!--Keret--> 
      <div class="container">   
      <div class='row flex-column-reverse flex-md-row'>


      <!--Menühöz tartozó tartalom-->
      <div class="div">
      <h2>Hírek</h2>
      <?php
      echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
      ?>
      </div>

      <div class='col-md-4 text-light bg-dark'> 
      <p>
      <?php  
       if(isset($_GET["id"]) && $_GET["id"]=='reglap')
          {
            include('reg.php');
          }

       else
          {
            include('login.php');
          }
     ?>
    </p>

      </div>
      </div>
      </div>
      
      <div class='jumbotron text-center' style='margin-bottom:0'>
      
      <!--Lábléc-->
      <p>Footer</p>
      </div>

</body>
</html>