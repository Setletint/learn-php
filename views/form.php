<?php include __DIR__ . '/partials/header.php' ?> 
    
    <form action="/answer?name=hello" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="age" placeholder="Age">
        <input type="submit" value="Submit">
    </form>

<?php include __DIR__ . '/partials/footer.php' ?> 