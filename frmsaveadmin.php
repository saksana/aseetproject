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
                <form action="saveadmin.php" method="POST">
                    <div class="mt-2">
                        <span class="px-2 fs-4"
                            style="border-left:8px solid #da0b0b;"><b>ບັນທຶກຂໍ້ມູນຜູ້ດູແລລະບົບ</b></span>

                        <span class="btn btn-warning px-4" style="float:right">ຈັດການຂໍ້ມູນ</span>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                            <label for="" class="form-label"><b>ລະຫັດ</b></label>
                            <input type="text" name="id" class="form-control" id="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                            <label for="" class="form-label"><b>ຊື່ຜູ້ດູແລລະບົບ</b></label>
                            <input type="text" name="name" class="form-control" id="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                            <label for="" class="form-label"><b>ພະແນກ</b></label>
                            <input type="text" name="department" class="form-control" id="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                            <label for="" class="form-label"><b>ໜ່ວຍງານ</b></label>
                            <input type="text" name="section" class="form-control" id="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                            <label for="" class="form-label"><b>ຊື່ຜູ້ໃຊ້</b></label>
                            <input type="text" name="username" class="form-control" id="">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
                            <label for="" class="form-label"><b>ລະຫັດຜ່ານ</b></label>
                            <input type="text" name="password" class="form-control" id="">
                        </div>
                    </div>
                    <div class="mt-3">
                        <input class="btn btn-primary mx-1" type="submit" value="ບັນທຶກຂໍ້ມູນ">
                        <input class="btn btn-danger" type="reset" value="ລ້າງຂໍ້ມູນ">
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>