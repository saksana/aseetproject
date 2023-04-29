<?php
require 'connect/connect.php';
$sql = "select * from tbadmin order by name asc";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
$no=1;
?>
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
                        <span class="px-2 fs-4" style="border-left:8px solid #da0b0b;"><b>ຂໍ້ມູນຜູ້ດູແລລະບົບ</b></span>
                        <hr>
                    </div>
                    <div>
                        <?php if($count>0){ ?>
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ລະຫັດ</th>
                                    <th>ຊື່ຜູ້ດູແລລະບົບ</th>
                                    <th>ພະແນກ</th>
                                    <th>ໜ່ວຍງານ</th>
                                    <th>ຊື່ຜູ້ໃຊ້</th>
                                    <th>ລະຫັດຜ່ານ</th>
                                    <th>ແກ້ໄຂ</th>
                                    <th>ລົບ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row=mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["department"]; ?></td>
                                    <td><?php echo $row["section"]; ?></td>
                                    <td><?php echo $row["username"]; ?></td>
                                    <td><?php echo $row["password"]; ?></td>
                                    <td><a href="frmeditadmin.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">ແກ້ໄຂ</a></td>
                                    <td><a href="deleteadmin.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('ຕ້ອງການລົບຂໍໍ້ມູນຫຼືບໍ່')">ລົບຂໍ້ມູນ</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php }else{ ?>
                            <div class="alert alert-danger">
                                ບໍ່ມີຂໍ້ມູນຜູ້ດູແລລະບົບ
                            </div>
                        <?php } ?>
                    </div>
                    <div class="mt-3">
                        <a class="btn btn-primary mx-1" href="frmsaveadmin.php">ເພີ່ມຂໍ້ມູນ</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>