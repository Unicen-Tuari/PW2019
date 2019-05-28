{include file="header.tpl"}
<h1>Editar Tarea</h1>
<form action="actualizar" method="post">
  <div class="form-group">
    <label for="tarea">Tarea</label>
    <input type="hidden" class="form-control"  name="idTarea" id="idTarea" value="{$tarea['id']}">
    <input type="text" class="form-control"  name="tarea" id="tarea" placeholder="Inserte aqui su tarea" value="{$tarea['titulo']}">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="form-control"  name="descripcion" id="descripcion" placeholder="Inserte aqui su descripcion" value="{$tarea['descripcion']}">
  </div>
    <input type="submit" class="btn btn-primary" value="Editar">
</form>

{include file="footer.tpl"}
