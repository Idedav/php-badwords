<?php
$text = $_GET['paragraf'];
$censured_word = $_GET['secret-word'];
$censured_text = str_replace($censured_word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <div class="container my-5">

        <h1>Il tuo paragrafo:</h1>
        <h6>Il paragrafo è lungo <?php echo strlen(trim($text)) ?> caratteri</h6>
        <p><?php echo $text ?></p>
        <h1>Il tuo paragrafo censurato:</h1>
        <h6>Il paragrafo è lungo <?php echo strlen(trim($censured_text)) ?> caratteri</h6>
        <p><?php echo $censured_text ?></p>

    </div>

</body>
</html>