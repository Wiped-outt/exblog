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
        <div>
            <h1></h1>
        </div>
    </main>