<div class="container">
    <h3>Profil</h3>
    <div class="profile">
        <h4><?php echo $user->username;?></h4>
        <p><b>E-pošta:</b> <?php echo $user->email;?></p>
        <p><b>Objavil novic:</b> <?php echo $articles_count?></p>
        <p><b>Objavil komentarjev:</b> <?php echo $comments_count?></p>
        <?php 
        if ($user->id == $_SESSION['USER_ID']){
            ?>
            <a href="/users/edit"><button class="btn btn-primary btn-sm">Uredi</button></a>
            <a href="/users/password"><button class="btn btn-secondary btn-sm">Ponastavi geslo</button></a>
            <?php
        }
        ?>
    </div>
</div>