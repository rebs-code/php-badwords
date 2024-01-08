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
    <header>
        <h1>Free Censorship</h1>
    </header>
    <div class="container-fluid">
        <form action="censor.php" method="post" class="mb-3 w-25 mx-auto mt-5">
            <label for="exampleFormControlTextarea1" class="form-label">Insert the text you'd like to censor</label>
            <textarea class="form-control mb-3" id="exampleFormControlTextarea1" name="inputText" rows="10"></textarea>
            <label for="censorWord" class="form-label">Enter the word to censor</label>
            <input type="text" class="form-control" id="censorWord" name="censorWord">
            <button type="submit" class="mt-3">Submit</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>