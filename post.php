<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti culpa soluta, laborum assumenda cum quia incidunt quidem obcaecati voluptatem voluptatibus ullam. Asperiores, iure mollitia officia nobis placeat quis veritatis quod.
            Recusandae, quasi veniam vitae aut natus officiis accusamus officia consectetur, expedita esse eos omnis assumenda nisi cumque nihil fugit quo voluptatem dicta magni ex ratione facilis! Quis unde facere modi.
            Ea, nam dolorem assumenda officia nulla recusandae modi sapiente fuga consequuntur quis iure, ullam quas doloremque saepe neque accusantium eos et temporibus aperiam magnam ducimus optio fugiat? Incidunt, qui nisi!
            Repudiandae, eveniet saepe fugit quas autem velit inventore fugiat laborum rerum voluptate ullam repellat cupiditate, fuga, unde voluptates quidem consequuntur et distinctio eius beatae dolor dicta placeat voluptatum earum. Ex.
            Mollitia sit similique totam tempora natus nemo quidem, ullam provident autem ipsam, vel soluta dolores nobis non corrupti, laboriosam molestiae veritatis eveniet debitis reprehenderit maiores ea! Officiis praesentium id cupiditate!Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti culpa soluta, laborum assumenda cum quia incidunt quidem obcaecati voluptatem voluptatibus ullam. Asperiores, iure mollitia officia nobis placeat quis veritatis quod.
            Recusandae, quasi veniam vitae aut natus officiis accusamus officia consectetur, expedita esse eos omnis assumenda nisi cumque nihil fugit quo voluptatem dicta magni ex ratione facilis! Quis unde facere modi.
            Ea, nam dolorem assumenda officia nulla recusandae modi sapiente fuga consequuntur quis iure, ullam quas doloremque saepe neque accusantium eos et temporibus aperiam magnam ducimus optio fugiat? Incidunt, qui nisi!
            Repudiandae, eveniet saepe fugit quas autem velit inventore fugiat laborum rerum voluptate ullam repellat cupiditate, fuga, unde voluptates quidem consequuntur et distinctio eius beatae dolor dicta placeat voluptatum earum. Ex.
            Mollitia sit similique totam tempora natus nemo quidem, ullam provident autem ipsam, vel soluta dolores nobis non corrupti, laboriosam molestiae veritatis eveniet debitis reprehenderit maiores ea! Officiis praesentium id cupiditate!Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti culpa soluta, laborum assumenda cum quia incidunt quidem obcaecati voluptatem voluptatibus ullam. Asperiores, iure mollitia officia nobis placeat quis veritatis quod.
            Recusandae, quasi veniam vitae aut natus officiis accusamus officia consectetur, expedita esse eos omnis assumenda nisi cumque nihil fugit quo voluptatem dicta magni ex ratione facilis! Quis unde facere modi.
            Ea, nam dolorem assumenda officia nulla recusandae modi sapiente fuga consequuntur quis iure, ullam quas doloremque saepe neque accusantium eos et temporibus aperiam magnam ducimus optio fugiat? Incidunt, qui nisi!
            Repudiandae, eveniet saepe fugit quas autem velit inventore fugiat laborum rerum voluptate ullam repellat cupiditate, fuga, unde voluptates quidem consequuntur et distinctio eius beatae dolor dicta placeat voluptatum earum. Ex.
            Mollitia sit similique totam tempora natus nemo quidem, ullam provident autem ipsam, vel soluta dolores nobis non corrupti, laboriosam molestiae veritatis eveniet debitis reprehenderit maiores ea! Officiis praesentium id cupiditate!Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti culpa soluta, laborum assumenda cum quia incidunt quidem obcaecati voluptatem voluptatibus ullam. Asperiores, iure mollitia officia nobis placeat quis veritatis quod.
            Recusandae, quasi veniam vitae aut natus officiis accusamus officia consectetur, expedita esse eos omnis assumenda nisi cumque nihil fugit quo voluptatem dicta magni ex ratione facilis! Quis unde facere modi.
            Ea, nam dolorem assumenda officia nulla recusandae modi sapiente fuga consequuntur quis iure, ullam quas doloremque saepe neque accusantium eos et temporibus aperiam magnam ducimus optio fugiat? Incidunt, qui nisi!
            Repudiandae, eveniet saepe fugit quas autem velit inventore fugiat laborum rerum voluptate ullam repellat cupiditate, fuga, unde voluptates quidem consequuntur et distinctio eius beatae dolor dicta placeat voluptatum earum. Ex.
            Mollitia sit similique totam tempora natus nemo quidem, ullam provident autem ipsam, vel soluta dolores nobis non corrupti, laboriosam molestiae veritatis eveniet debitis reprehenderit maiores ea! Officiis praesentium id cupiditate!Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti culpa soluta, laborum assumenda cum quia incidunt quidem obcaecati voluptatem voluptatibus ullam. Asperiores, iure mollitia officia nobis placeat quis veritatis quod.
            Recusandae, quasi veniam vitae aut natus officiis accusamus officia consectetur, expedita esse eos omnis assumenda nisi cumque nihil fugit quo voluptatem dicta magni ex ratione facilis! Quis unde facere modi.
            Ea, nam dolorem assumenda officia nulla recusandae modi sapiente fuga consequuntur quis iure, ullam quas doloremque saepe neque accusantium eos et temporibus aperiam magnam ducimus optio fugiat? Incidunt, qui nisi!
            Repudiandae, eveniet saepe fugit quas autem velit inventore fugiat laborum rerum voluptate ullam repellat cupiditate, fuga, unde voluptates quidem consequuntur et distinctio eius beatae dolor dicta placeat voluptatum earum. Ex.
            Mollitia sit similique totam tempora natus nemo quidem, ullam provident autem ipsam, vel soluta dolores nobis non corrupti, laboriosam molestiae veritatis eveniet debitis reprehenderit maiores ea! Officiis praesentium id cupiditate!Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti culpa soluta, laborum assumenda cum quia incidunt quidem obcaecati voluptatem voluptatibus ullam. Asperiores, iure mollitia officia nobis placeat quis veritatis quod.
            Recusandae, quasi veniam vitae aut natus officiis accusamus officia consectetur, expedita esse eos omnis assumenda nisi cumque nihil fugit quo voluptatem dicta magni ex ratione facilis! Quis unde facere modi.
            Ea, nam dolorem assumenda officia nulla recusandae modi sapiente fuga consequuntur quis iure, ullam quas doloremque saepe neque accusantium eos et temporibus aperiam magnam ducimus optio fugiat? Incidunt, qui nisi!
            Repudiandae, eveniet saepe fugit quas autem velit inventore fugiat laborum rerum voluptate ullam repellat cupiditate, fuga, unde voluptates quidem consequuntur et distinctio eius beatae dolor dicta placeat voluptatum earum. Ex.
            Mollitia sit similique totam tempora natus nemo quidem, ullam provident autem ipsam, vel soluta dolores nobis non corrupti, laboriosam molestiae veritatis eveniet debitis reprehenderit maiores ea! Officiis praesentium id cupiditate!</p>
        </div>
    </main>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
<?php
include_once("templates/footer.php")
?>