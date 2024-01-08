<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <form action="/admin/posts/edit?id=<?=$post->id?>" method="POST">
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input id="title" class="input" type="text" placeholder="Title" name="title" value="<?=$post->title?>">
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">Content</label>
            <div class="control">
                <textarea id="body" class="textarea" placeholder="Content" name="body"><?=$post->body?></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="Update">
            </div>
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>