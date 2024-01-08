<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- PHP instructions -->
    <?php
    // retrieve the input text and the word to censor
    $inputText = $_POST['inputText'];
    $censorWord = $_POST['censorWord'];

    // replace the word to censor with asterisks
    $censoredText = str_replace($censorWord, '***', $inputText);

    ?>
    <!-- header -->
    <header>
        <h1>Free Censorship</h1>
    </header>
    <!-- main -->
    <main>
        <!-- original text -->
        <div class="container-fluid">
            <h2 class="mt-5">Here's your original text: </h2>
            <div class="w-50 me-auto my-3 border p-2 text-div">
                <?php echo $inputText ?>
            </div>
            <h3>Original text length: <?php echo strlen($inputText) ?> characters </h3>
        </div>
        <!-- replaced text -->
        <div class="container-fluid">
            <h2 class="mt-5">Here's your replaced text: </h2>
            <div class="w-50 me-auto my-3 border p-2 text-div">
                <?php echo $censoredText ?>
            </div>
            <h3>Censored text length: <?php echo strlen($censoredText) ?> characters </h3>
        </div>
    </main>
</body>

</html>