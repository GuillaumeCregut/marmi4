<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $recipe['title'] ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    </head>
    <body>
        <main class="container">
            <a href="/">Home</a>
            <h1><?= $recipe['title'] ?></h1>
            <p>
                <?= $recipe['description'] ?>
            </p>
            <div>
                <a href="/update?id=<?= $recipe["id"] ?>">update</a>
            </div>
            <div>
                <a href="/delete?id=<?= $recipe["id"] ?>">delete</a>
            </div>
        </main>
    </body>
</html>
