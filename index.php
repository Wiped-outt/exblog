<?php
    // Inclusão do header
    include_once("templates/header.php");
?>

<!-- <h1>Olá mundo!</h1> -->

    <!-- // pata teste
    var_dump($posts);
    echo "<br><br>";
    print_r($posts); -->
    
    <main>

        <div id="title-container">
            <h1>Code Blog</h1>
            <p>O seu blog de Programação</p>
        </div>
        <div id="posts-container">
        <?php foreach($posts as $post): ?>
            <div class="post-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                <h2 class="post-title"><a href="<?= $BASE_URL ?>post.php?id=<?= $post-"></a></h2>
            </div>

        </div>

    </main>

<?php
    include_once("templates/footer.php");
?>