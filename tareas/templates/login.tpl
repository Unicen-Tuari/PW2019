{include file="header.tpl"}
<form class="form-signin" action="ingresar" method="post">
  <img class="mb-4" src="" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Por favor ingresa</h1>
  <label for="email" class="sr-only">Email</label>
  <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
  <a href="registrarse">Registrarse</a>
</form>
{include file="footer.tpl"}
