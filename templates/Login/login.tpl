{include file=../header.tpl};
<form action="/checkuser" method="POST">
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" name="email" placeholder="Email" >
        </div>
    </div>
    <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password">
            <input type="submit" name="Enviar" value="Enviar">
        </div>
    </div>
</form>
{include file=../footer.tpl};