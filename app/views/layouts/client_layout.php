<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/mvc-projec/public/assets/clients/css/style.css">
</head>

<body>
    <?php
    $this->render('blocks/header');

    $this->render($content, $sub_content);
    $this->render('blocks/footer');
    ?>

    <script tyte="text/javascript" src="http://localhost/mvc-projec/public/assets/clients/js/script.js"></script>
</body>

</html>