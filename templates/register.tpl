{include file="templates/header.tpl"}
<form class="row g-3" method="POST" action="register">
<h2> register</h2>
  <div class="col-auto">
  <label for="Email" >Ingres su email</label>
    <input type="text"  name="Email" id="Email"; required>
  </div>
  <div class="col-auto">
  <label for="Password">Ingrese su password</label>
    <input type="password" name="Password" id="Password" placeholder="Password" required>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Crear cuenta</button>
  </div>
</form>