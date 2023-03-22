<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body>
<header class="h-15vh bg-header">
    <h1>Cabecera</h1>
</header>
<nav class="h-10vh bg-nav">
    <h1>Menú</h1>
</nav>
<main class="h-65vh bg-main">
    @yield("main")
</main>
<footer class="h-10vh bg-footer">
    <h1>Footer</h1>
</footer>
</body>
</html>














