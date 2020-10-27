<?php include 'conecta.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio Sesion</title>
    
</head>
<body>
     <div class="container">
       <h3 class="text-center py-4">Inicio de sesion </h3>
       <div class="card">
        <form class="form-group" action="login.php" method="post">
          <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
          <br>
          <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required>
          <br>
          <input type="submit" name="Inicio" value="Inicio" class="btn-success">
          <div class="col"> 
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="ver" onclick="verpass(this);">
              <label class="custom-control-label" for="ver">Ver Password</label>
            </div>
          </div>
        </form>
       </div>
     </div>

<script type="text/javascript">
  function verpass(cb){
      if (cb.checked)
      $('#pass').attr("type","text");
      else 
      $('#pass').attr("type","password");
  }
</script>

</body>
</html>