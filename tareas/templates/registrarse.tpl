{include file="header.tpl"}
<form class="form-signin" action="registro" method="POST">
  <img class="mb-4" src="" alt="" width="72" height="72">
  <label for="email" class="sr-only">Email</label>
  <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
</form>
{include file="footer.tpl"}
