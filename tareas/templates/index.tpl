{include file="header.tpl"}
<h1>Lista de Tareas</h1>
<form action="crear" method="post">
  <div class="form-group">
    <label for="tarea">Tarea</label>
    <input type="text" class="form-control"  name="tarea" id="tarea" placeholder="Inserte aqui su tarea">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control"  name="descripcion" id="descripcion" placeholder="Inserte aqui su descripcion">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input"  name="finalizada" id="finalizada">
    <label for="finalizada">Finalizada?</label>
  </div>
    <input type="submit" class="btn btn-primary" value="Crear">
</form>

<ul class="list-group">
{foreach from=$tareas item=tarea}
  <li class="list-group-item">
          {if $tarea['finalizada'] == "1"}
          <strike>
          {/if}
            <h3>
              <a href='ver/{$tarea['id']}'>{$tarea['titulo']|upper|truncate:10}</a>
              <small class="text-muted">
                {$tarea['descripcion']}
                <a href='borrar/{$tarea['id']}'><i class="far fa-trash-alt"></i></a>
                <a href='finalizar/{$tarea['id']}'><i class="fas fa-check-square"></i></a>
                <a href='editar/{$tarea['id']}'><i class="far fa-edit"></i></a>
              </small>
            </h3>
          {if $tarea['finalizada'] == "1"}
            </strike>
          {/if}
    </li>
{/foreach}
 </ul>
{include file="footer.tpl"}
