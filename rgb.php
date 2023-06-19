<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?
    if (isset($_GET["submit"])) {
        $r = isset($_GET["red"]) ? intval($_GET["red"]) : 255;
        $g = isset($_GET["green"]) ? intval($_GET["green"]) : 255;
        $b = isset($_GET["blue"]) ? intval($_GET["blue"]) : 255;
    } else {
        $r = 255;
        $g = 255;
        $b = 255;
    }
    $opposite_r = 255 - $r;
    $opposite_g = 255 - $g;
    $opposite_b = 255 - $b;
    ?>
    <style>
        span{
            background-color: rgb(<?echo $r?>, <?echo $g?>, <?echo $b?>);
            color: rgb(<?echo $opposite_r?>, <?echo $opposite_g?>, <?echo $opposite_b?>);
            font-size: 20px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="col">
            <form method="get">
                <div class="mb-3">
                    <label for="red" class="form-label">R:</label>
                    <input type="number" class="form-control" id="red" name="red" min="0" max="255">

                </div>
                <div class="mb-3">
                    <label for="green" class="form-label">G:</label>
                    <input type="number" class="form-control" id="green" name="green" min="0" max="255">
                </div>
                <div class="mb-3">
                    <label for="blue" class="form-label">B:</label>
                    <input type="number" class="form-control" id="green" name="blue">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Accept" min="0" max="255">
            </form>
            <hr>
            <span id="">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione obcaecati adipisci,
                excepturi, nesciunt provident eius praesentium corrupti ullam accusamus, libero numquam
                voluptate vel laudantium molestias! Nemo ab ipsam eaque sit.
            </span>
        </div>
    </div>
</body>

</html>