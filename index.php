<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Templete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>
</head>

<body>
    <?php require 'navbar.php'; ?>
    <div style="padding-top: 50px;">
        <?php require 'menu.php'; ?>
        <div id="main" class="contents">
            <div>
                <span id="open" style="font-size:30px;cursor:pointer;display:none;" ; onclick="openNav()">&#9776;<span
                        class="fs-6"></span></span>
                <span id="close" style="font-size:30px;cursor:pointer" onclick="closeNav()">&#9776;<span
                        class="fs-6"></span></span>
            </div>
            <div class="container">
                
            </div>

        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>