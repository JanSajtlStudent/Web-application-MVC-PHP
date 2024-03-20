<div class="container">
    <h3>Uredi novico</h3>
    <h4><?php echo $article->title;?></h4>
    <form action="/articles/update?id=<?php echo $article->id;?>" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Naslov</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $article->title ?>">
        </div>
        <div class="mb-3">
            <label for="abstract" class="form-label">Povzetek</label>
            <input type="text" class="form-control" id="abstract" name="abstract" value="<?php echo $article->abstract ?>">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Vsebina</label>
            <input type="text" class="form-control" id="text" name="text" value="<?php echo $article->text ?>">
        </div>
        <a href="/articles/list"><button type="button" class="btn btn-secondary">Nazaj</button></a>
        <button type="submit" class="btn btn-primary" name="post">Uredi Novico</button>
    </form>
</div>