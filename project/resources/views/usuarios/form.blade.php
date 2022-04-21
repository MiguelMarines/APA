<h1 id="RegisterTitle">Registrar Usuario</h1>
<br>
       
        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="rol">Rol:</label>
            <select name="rol" id="rol" class="form-control">
                <option value="administrador">Administrador</option>
                <option value="evaluador">Evaluador</option>
            </select>
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password">Confirmar Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <br>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-success">Submit</button>
        </div>
     
    </form>