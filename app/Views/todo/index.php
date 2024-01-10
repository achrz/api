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
    if (!empty($bosco)) : ?>
        <ul>
            <?php foreach ($bosco as $todo) : ?>
                <li><?= $todo['no']; ?></li>
                <li><?= $todo['code_item']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No todos found.</p>
    <?php endif; ?>

</body>

</html>