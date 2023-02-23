<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }

        }
    }

?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, animi repellat laborum consequatur eligendi voluptate magnam doloribus perferendis quos, natus, illo dicta voluptates soluta aspernatur obcaecati possimus quam voluptatibus dolorum.
                Fugit illum enim molestias nisi sunt. Vero incidunt quia debitis optio. Doloremque enim laboriosam odio vitae ipsum excepturi maxime cupiditate atque. Vero maxime sapiente eveniet blanditiis inventore mollitia porro expedita!
                Beatae at blanditiis, eius quos similique nam in voluptatibus magni commodi quibusdam assumenda neque magnam fugiat animi minima error iste harum, repudiandae corporis, id voluptate a labore? Magni, laudantium pariatur.
                Voluptatum, quod quis eligendi temporibus recusandae pariatur adipisci necessitatibus sit sint repudiandae placeat minima voluptatibus reiciendis praesentium enim? Aliquid aliquam minima soluta commodi illo quia, reiciendis labore voluptate error dolor!
                Voluptatibus odit doloribus aspernatur nostrum laborum labore. Alias, hic tempora placeat cum natus qui quas facilis magni. Ad quod, obcaecati incidunt ratione ut ullam, distinctio, pariatur optio ea eius ipsa.</p>
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, animi repellat laborum consequatur eligendi voluptate magnam doloribus perferendis quos, natus, illo dicta voluptates soluta aspernatur obcaecati possimus quam voluptatibus dolorum.
                Fugit illum enim molestias nisi sunt. Vero incidunt quia debitis optio. Doloremque enim laboriosam odio vitae ipsum excepturi maxime cupiditate atque. Vero maxime sapiente eveniet blanditiis inventore mollitia porro expedita!
                Beatae at blanditiis, eius quos similique nam in voluptatibus magni commodi quibusdam assumenda neque magnam fugiat animi minima error iste harum, repudiandae corporis, id voluptate a labore? Magni, laudantium pariatur.
                Voluptatum, quod quis eligendi temporibus recusandae pariatur adipisci necessitatibus sit sint repudiandae placeat minima voluptatibus reiciendis praesentium enim? Aliquid aliquam minima soluta commodi illo quia, reiciendis labore voluptate error dolor!
                Voluptatibus odit doloribus aspernatur nostrum laborum labore. Alias, hic tempora placeat cum natus qui quas facilis magni. Ad quod, obcaecati incidunt ratione ut ullam, distinctio, pariatur optio ea eius ipsa.</p>
            </div>
            <aside id="nav-container">
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
            </aside>
    </main>
    
<?php
    include_once("templates/footer.php")
?>
