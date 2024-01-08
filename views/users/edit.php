<?php 
// Jevgeni Moskaljuk
// TA-21V
include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
        <div class="field">
            <label class="label" for="title">Email</label>
            <div class="control">
                <input id="title" class="input" type="text" placeholder="Title" name="email" value="<?=$user->email?>">
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">Password</label>
            <div class="control">
                <textarea id="body" class="textarea" placeholder="Content" name="password"><?=$user->password?></textarea>
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