<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<style type="text/css">
table {
  width: 300px;
  margin: auto;
  background-color: #FFC;
  border: 2px solid #F00;
  padding: 5px;
}

td, h3{
  text-align: center;
}
</style>
<title>Login</title>
</head>

<body>
  <h3>..... INTRODUCE TUS DATOS .....</h3>
  <form action="comprueba_login.php" method="POST">
    <table>
      <tr>
        <td>Login: </td>
        <td><input type="text" name="login"></td>
      </tr>
      <tr>
        <td>Password: </td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="enviar"
          value="LOGIN"></td>
      </tr>
    </table>

  </form>

    </body>

</html>