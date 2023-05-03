<?php
if (empty($_POST['content']) and isset($_POST['word'])) {
    $content = 'Content is missing!';
    $contentBan = '***';
    $contentLen = '0';
} else if (empty($_POST['word']) and isset($_POST['content'])) {
    $content = '***';
    $contentBan = "❌Don't forget to ban bad words❌";
    $contentLen = '0';
} else if ($_POST['content'] and $_POST['word']) {
    $content = $_POST['content'];
    $contentLen = strlen($content);
    $word = $_POST['word'];
    if (strpos($content, $word) !== false) {
        $contentBan = str_ireplace($word, '***', $content);
    } else {
        $contentBan = 'Your word is missing 🥸';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-8 col-sm-12 text-center">
                <div>
                <h3><?php echo $content ?></h3>
                <h5 class="text-danger"><?php echo "The string contains $contentLen letters" ?></h5>
                <h3><?php echo $contentBan ?></h3>
            </div>
            </div>
        </div>
    </div>

    <script src="./js/main.js"></script>
</body>

</html>