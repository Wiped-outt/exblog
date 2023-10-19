<!-- Inclusão do cabeçalho -->
<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postIf) {
                $currentPost = $post;
            }

        }

    }

    ?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><? $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<? $currentPost['img'] ?>" alt="<?= $currentPost ['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro iste, magnam possimus voluptate corporis alias inventore. Vero, voluptate nam. Voluptates mollitia repellendus dolores error perspiciatis repudiandae quod, ullam molestiae natus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, ipsum a consequatur est perspiciatis quo enim, aliquid tempore dolorum aspernatur dicta, asperiores labore libero rem ratione harum vero necessitatibus. Voluptate?
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet sed repellat, error quaerat labore fugiat dolore, tempore molestias laudantium iste adipisci fuga ex beatae in quae, magnam nam ullam. Aliquid? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore neque iste maiores sapiente. Sed recusandae sequi exercitationem sapiente nemo suscipit, iure natus autem aut labore, delectus, architecto mollitia perferendis rerum!</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quibusdam atque obcaecati, maxime repellendus quia sint voluptates maiores illum nesciunt molestias, doloribus libero nihil fugiat error esse ad ullam doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ut non repudiandae reiciendis, rem, illum aliquam labore eum asperiores sed minus illo suscipit dolorem ratione consequatur est reprehenderit ipsum. Hic.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus doloremque non perspiciatis temporibus mollitia odit, facere eligendi ullam reprehenderit consequuntur optio necessitatibus, autem quasi nisi totam nostrum quaerat explicabo. Similique. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla necessitatibus veniam labore natus reiciendis facilis unde, debitis, delectus quos soluta possimus sit. Perferendis beatae ducimus voluptatum officiis blanditiis dignissimos aut.</p>
    </div>
    <div class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<!-- Inclusão do rodapé -->
<?php
    include_once("templates/footer.php");
?>