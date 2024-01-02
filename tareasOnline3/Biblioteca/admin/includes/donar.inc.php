<form class="donateForm" action="../admin/actions/donar.act.php" method="post">
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" required pattern="^(?!\s*$).+" title="No se permite texto vacío">
    </div>
    <div class="form-group">
        <label for="categoria">Categoría principal</label>
        <select name="categoria" id="categoria" required>
            <option value="fantasia">Fantasia</option>
            <option value="tragedia">Tragedia</option>
            <option value="novela">Novela</option>
            <option value="ficcion">Ficcion</option>
            <option value="historica">Historica</option>
            <option value="filosofia">Filosofía</option>
            <option value="policiaca">Policiaca</option>
            <option value="intriga">Intriga</option>
        </select>
    </div>
    <div class="form-group">
        <label for="nombreAutor">Nombre Autor</label>
        <input type="text" name="nombreAutor" required pattern="^(?!\s*$).+" title="No se permite texto vacío">
    </div>
    <div class="form-group">
        <label for="apellidosAutor">Apellidos Autor</label>
        <input type="text" name="apellidosAutor" required pattern="^(?!\s*$).+" title="No se permite texto vacío">
    </div>
    <div class="form-group">
        <label for="nacionalidadAutor">Nacionalidad Autor</label>
        <input type="text" name="nacionalidadAutor" required pattern="^(?!\s*$).+" title="No se permite texto vacío">
    </div>

    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-donar" value="DONAR">
    </div>

</form>