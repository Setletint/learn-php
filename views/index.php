<?php include __DIR__ . '/partials/header.php' ?> 
<div class="container">
    <div class="columns">
        <?php foreach($posts as $post): ?>
            <div class="column is-one-quarter">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <?=$post->title?>
                        </p>
                    </header>
                    <!-- <div class="card-image">
                        <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                    </div> -->
                    <div class="card-content">
                        <div class="content">
                            <?=$post->snippet()?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include __DIR__ . '/partials/footer.php' ?> 