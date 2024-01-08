<?php 
// Jevgeni Moskaljuk
// TA-21V
include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <form action="/admin/users" method="POST">
        <div class="field">
            <label class="label" for="title">Email</label>
            <div class="control">
                <input id="title" class="input" type="text" placeholder="Title" name="email">
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">Password</label>
            <div class="control">
                <input id="body" class="input" type="password" placeholder="password" name="password">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="Create">
            </div>
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>