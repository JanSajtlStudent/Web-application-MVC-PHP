<div class="container">
    <h3>Seznam novic</h3>
    <div class="article">
        <h4><?php echo $article->title;?></h4>
        <p><b>Povzetek:</b> <?php echo $article->abstract;?></p>
        <p><?php echo $article->text; ?></p>
        <p>Objavil: <a class="text-decoration-none" href="/users/profile?id=<?php echo $article->user->id; ?>"><?php echo $article->user->username; ?></a>, <?php echo date_format(date_create($article->date), 'd. m. Y \ob H:i:s'); ?></p>
        <?php if (isset($_SESSION['user_id'])) { ?>
            <form action="/comments/create" method="POST">
                <div class="mb-3">
                    <label for="text" class="form-label">Komentar</label>
                    <input type="text" class="form-control" id="text" name="text">
                </div>
                <input type="hidden" name="article_id" value="<?php echo $article->id; ?>">
                <button type="submit" class="btn btn-primary" name="post">Objavi Komentar</button>
            </form>
        <?php } else { ?>
            <p class="text-danger">Za komentiranje se prijavi</p>
        <?php } ?>

        <h4>Komentarji</h4>
        <?php
        $comments = Comment::all($article->id);
        foreach ($comments as $comment){
            ?>
            <div class="container">
                <p><?php echo $comment->content;?></p>
                <p>Objavil: <a class="text-decoration-none" href="/users/profile?id=<?php echo $comment->user->id; ?>"><?php echo $comment->user->username; ?></a>, <?php echo date_format(date_create($comment->date), 'd. m. Y \ob H:i:s'); ?></p>
            </div>
            <?php
        }
        ?>
        <a href="/"><button class="btn btn-secondary btn-sm">Nazaj</button></a>
    </div>
</div>