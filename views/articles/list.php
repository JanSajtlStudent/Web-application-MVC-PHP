<div class="container">
    <h3>Seznam mojih novic</h3>
    <?php
    foreach ($articles as $article){
        ?>
        <div class="article">
            <h4><?php echo $article->title;?></h4>
            <p><?php echo $article->abstract;?></p>
            <a href="/articles/show?id=<?php echo $article->id;?>"><button class="btn btn-primary btn-sm">Preberi več</button></a>
            <a href="/articles/update?id=<?php echo $article->id;?>"><button class="btn btn-secondary btn-sm">Uredi</button></a>
            <a href="/articles/delete?id=<?php echo $article->id;?>"><button class="btn btn-danger btn-sm">Odstrani</button></a>
        </div>
        <?php
    }
    ?>
</div>