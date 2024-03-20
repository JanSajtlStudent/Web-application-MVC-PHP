<div class="container">
    <h3>Objavi novico</h3>
    <form action="/articles/create" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Naslov</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($_POST["title"]) ? $_POST["title"]: ""; ?>">
        </div>
        <div class="mb-3">
            <label for="abstract" class="form-label">Povzetek</label>
            <input type="text" class="form-control" id="abstract" name="abstract" value="<?php echo isset($_POST["abstract"]) ? $_POST["abstract"]: ""; ?>">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Vsebina</label>
            <input type="text" class="form-control" id="text" name="text" value="<?php echo isset($_POST["text"]) ? $_POST["text"]: ""; ?>">
        </div>
        <input type="hidden" name="author" value="<?php echo $_SESSION["USER_ID"] ?>">
        <button type="submit" class="btn btn-primary" name="post">Objavi Novico</button>
    </form>
</div>