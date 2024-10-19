<div>
		<label for="name">Nombre</label>
		<input type="text" name="name" id="name" value="<?= old('name', esc($user->name) )?>">
	</div>
	
	<div>
		<label for="email">email</label>
		<input type="text" name="email" id="email" value="<?= old('email', esc($user->email ))?>">
	</div>

	<div>
		<label for="password">contraseña</label>
		<input type="password" name="password">

        <?php if ($user->id): ?>
            <p>Deja en blanco para mantener la contraseña existente</p>
            <?php endif; ?>
	</div>

	<div>
		<label for="password_confirmation">Repite la contraseña</label>
		<input type="password" name="password_confirmation">
	</div>

    <div>
		<label for="is_admin">  
		<input type="checkbox" id="is_admin" name="is_admin" value="1"
                <?php if (old("is_admin", $user->is_admin)): ?>checked <?php endif; ?>> administrator
        </label>
	</div>
