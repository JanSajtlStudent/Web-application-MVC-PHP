<div class="container">
    <h3 class="mb-3">Ponastavi geslo</h3>
    <form action="/users/password" method="POST">
        <div class="mb-3">
            <label for="old_password" class="form-label">Staro geslo</label>
            <input type="password" class="form-control" id="old_password" name="old_password" value="">
        </div>
        <div class="mb-3">
            <label for="new_password" class="form-label">Novo geslo</label>
            <input type="password" class="form-control" id="new_password" name="new_password" value="">
        </div>
        <div class="mb-3">
            <label for="repeat_password" class="form-label">Ponovi novo geslo</label>
            <input type="password" class="form-control" id="repeat_password" name="repeat_password" value="">
        </div>
        <button type="submit" class="btn btn-primary" name="register">Ponastavi geslo</button>
        <label class="text-danger"><?php echo $error; ?></label>
    </form>
</div>