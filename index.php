<?php 
$title = 'Bad Words🤐';
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
            <div class="home col-lg-6 col-md-8 col-sm-12 text-center">
                <div>
                <h3><?php echo $title ?></h3>
                <form action="badwords.php" method="post">

                    <label for="content">Write your sentence</label>
                    <input type="text" name="content" id="content">

                    <label for="word">To Ban</label>
                    <input type="text" name="word" id="word">

                    <br>
                    <input type="submit" value="Send">
                </form>
            </div>
            </div>
        </div>
    </div>

    <script src="./js/main.js"></script>
</body>

</html>