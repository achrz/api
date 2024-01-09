<!-- app/Views/todos/index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos List</title>
</head>

<body>

    <h1>Todos List</h1>

    <?php
    if (!empty($todos)) : ?>
        <ul>
            <?php foreach ($todos as $todo) : ?>
                <li><?= $todo['id']; ?></li>
                <li><?= $todo['title']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No todos found.</p>
    <?php endif; ?>

</body>

</html>