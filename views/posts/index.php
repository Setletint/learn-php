<?php include __DIR__ . '/../partials/header.php' ?> 
<div class="container">
    <a class="button is-primary" href="/admin/posts/new">Add Post</a>
    <table class="table is-fullwidth is-striped">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($posts as $post): ?>
                <tr>
                    <td><?=$post->id?></td>
                    <td><?=$post->title?></td>
                    <td>
                        <div class="buttons has-addons">
                            <a class="button is-info" href="/admin/posts/view?id=<?=$post->id?>">View</a>
                            <a class="button is-warning" href="/admin/posts/edit?id=<?=$post->id?>">Edit</a>
                            <a class="button is-danger" href="/admin/posts/delete?id=<?=$post->id?>">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?> 