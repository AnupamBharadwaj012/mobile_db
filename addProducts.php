<?php
$connect =mysqli_connect("localhost","root","","mobiledb");
if(isset($_POST["insert-btn"])) {
    $sql = "CALL insertIntoTwoTables ('" . $_POST["item_id"] . "','" . $_POST["item_brand"] . "','" . $_POST["item_name"] . "','" . $_POST["item_price"] . "','" . $_POST["item_image"] . "','" . $_POST["processor"] . "','" . $_POST["display"] . "','" . $_POST["ram"] . "','" . $_POST["storage"] . "','" . $_POST["camera"] . "','" . $_POST["rating"] . "','" . $_POST["item_category"] . "')";
    $res = mysqli_query($connect, $sql);
    if ($res) {
        echo '<script>alert("data inserted successfully")</script>';
    }else{
        echo '<script>alert("error: data was not inserted")</script>';
    }

    if ($res) {
        header("location:adminpage.php?inserted");

    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile DB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <style>
        body{
            margin:0;
            padding: 0;
            background-color: #F1F1F1;
        }
        .box{
            width:1500px;
            padding: 20px;
            background-color: #FFFFFF ;
        }
        h1{
            color:#00A5C4;
        }
    </style>
</head>
<body>
<header>
    <h1>Enter the product details below</h1>
    <div class="font-rale font-size-14">
        <a href="adminpage.php" class="px-3 border-right border-left text-dark alert-danger">Back to admin page</a>
    </div>
</header>
    <div class ="container box">
        <form method="post" action="">
            <div class="form-group">
                <label>item_id</label>
                <input type="text" name="item_id" id="item_id" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>item_brand</label>
                <input type="text" name="item_brand" id="item_brand" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>item_name</label>
                <input type="text" name="item_name" id="item_name" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>item_price</label>
                <input type="text" name="item_price" id="item_price" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>item_image</label>
                <input type="text" name="item_image" id="item_image" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>product_processor</label>
                <input type="text" name="processor" id="processor" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>product_display</label>
                <input type="text" name="display" id="display" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>product_ram</label>
                <input type="text" name="ram" id="ram" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>product_storage</label>
                <input type="text" name="storage" id="storage" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>product_camera</label>
                <input type="text" name="camera" id="camera" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>product_rating</label>
                <input type="text" name="rating" id="rating" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <label>item_category</label>
                <input type="text" name="item_category" id="item_category" class="form-control" required>
                <br />
            </div>
            <div class="form-group">
                <input type="submit" name="insert-btn" value="ADD" class="btn btn-info">
                <br />
            </div>
        </form>
    </div>

</body>
</html>