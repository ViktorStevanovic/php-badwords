<?php
$badword = $_GET['badword'];

$censoredParagraph = str_ireplace(" " . $badword . " ", " *** ", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>

<body>
    <h1>Bad Words</h1>
    <form action="./index.php" method="GEt">
        <label for="badword">Badword to be censored:</label>
        <input type="text" name="badword" id="badword">

        <button type="submit">censore!</button>
    </form>

    <h2>
        Paragraph: <br>
        Length: <?php echo strlen($paragraph); ?>
    </h2>
    <p>
        <?php echo $paragraph; ?>
    </p>
    <hr>
    <h2>
        Censored Paragraph: <br>
        Length: <?php echo strlen($censoredParagraph); ?>
    </h2>
    <p>
        <?php echo $censoredParagraph; ?>
    </p>
</body>

</html>