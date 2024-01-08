<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>

<body>

</body>

</html>



<?php
// retrieve the input text and the word to censor
$inputText = $_POST['inputText'];
$censorWord = $_POST['censorWord'];

// replace the word to censor with asterisks
$censoredText = str_replace($censorWord, '***', $inputText);

// print the censored text
echo $censoredText;
