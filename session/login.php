<?php
session_start();
if(isset($_COOKIE['nome'])){
    $_SESSION['usuario'] = $_COOKIE['nome'];
    $_SESSION['email'] = $_COOKIE['email'];
    header('Location: bv.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Insert title here</title>
</head>
<body>

        <h5 id="error"></h5>

<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
</form>

<form action="teste.php" method="post">
    <label for="usuario">usuario: </label>
    <input type="text" name="usuario" />
    <label for="email">Email: </label>
    <input type="text" name="email" />
    <input type="submit" value="Registar"/>
</form>



<a href="registrar.html">REGISTRA AQUI</a>

<script>
        cookie = document.cookie;
        if (cookie.indexOf("status") >= 0) {
            p = document.querySelector('#error');
            p.innerHTML = "Sucesso ao sair da conta!";
        }
    </script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>