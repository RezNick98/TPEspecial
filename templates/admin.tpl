{include file = header.tpl}
    <h1>ADMINISTRADOR</h1>
        <section>
            <h3>Lista de administradores</h3>
                {foreach from=$usuarios item=user}
                    {if $user->rol==1}
                        <li class="liUsuarios">{$user->email|truncate:40}<a href="deleteUser/{$user->Id_usuario}">Borrar usuario</a>
                        <a href="removeAdmin/{$user->Id_usuario}">Quitar permisos</a></li>
                    {/if}
                {/foreach}
                
                
                <h3>Lista de usuarios</h3>
                {foreach from=$usuarios item=user}
                    {if $user->rol==0}
                         <li class="liUsuarios">{$user->email|truncate:40}<a href="deleteUser/{$user->Id_usuario}">Borrar usuario</a>
                         <a href="giveAdmin/{$user->Id_usuario}">Dar permisos</a></li>
                    {/if}
                {/foreach}
            </ul>
        </section>
        <section>
            <a class="botonVolver" href="{BASE_URL}home">Volver</a>
        </section>
    </div><h1>ADMINISTRADOR</h1>
  <div class="divUsuarios">
      <section>
          <ul class="listaUsuarios">
              
              <h3>Lista de administradores</h3>
              {foreach from=$usuarios item=user}
                  {if $user->rol==1}
                      <li class="liUsuarios">{$user->email|truncate:40}<a> href="deleteUser/{$user->Id_usuario}">Borrar usuario</a>
                      <a href="removeAdmin/{$user->Id_usuario}">Quitar permisos</a></li>
                  {/if}
              {/foreach}
              
              <h3>Lista de usuarios</h3>
              {foreach from=$usuarios item=user}
                  {if $user->rol==0}
                        <li class="liUsuarios">{$user->email|truncate:40}<a href="deleteUser/{$user->id_usuario}">Borrar usuario</a>
                        <a href="giveAdmin/{$user->Id_usuario}">Dar permisos</a></li>
                  {/if}
              {/foreach}
          </ul>
      </section>
      <section>
          <a class="botonVolver" href="{BASE_URL}home">Volver</a>
      </section>
  </div>
  {include file = footer.tpl}



