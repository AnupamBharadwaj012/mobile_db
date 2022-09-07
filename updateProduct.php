<?php
$connect =mysqli_connect("localhost","root","","mobiledb");
$itemid = $_GET['id'];
$showquery = "select * from product where item_id='$itemid'";
$showdata=mysqli_query($connect,$showquery);
$arrData = mysqli_fetch_array($showdata);

$showquery2 = "select * from specifications where item_id='$itemid'";
$showdata2 =mysqli_query($connect,$showquery2);
$arrData2 = mysqli_fetch_array($showdata2);

$iid = $_GET['id'];

$query = "delete from product where item_id = $iid";
if (isset($_POST["Delete-btn"])) {
    $query = "delete from product where item_id = $iid";
    $result = mysqli_query($connect, $query);
    if ($result) {
        echo '<script>alert("product deleted successfully")</script>';
    } else {
        echo '<script>alert("error: product was not deleted")</script>';
    }
    if (mysqli_query($connect, $query)) {
        header("location:adminpage.php?updated");
    }
}


if(isset($_POST["insert-btn"])){
    $idupdate = $_GET['id'];
    $item_id =$_POST["item_id"];
    $item_brand =$_POST["item_brand"];
    $item_name =$_POST["item_name"];
    $item_price =$_POST["item_price"];
    $item_image =$_POST["item_image"];
    $processor =$_POST["processor"];
    $display =$_POST["display"];
    $ram =$_POST["ram"];
    $storage =$_POST["storage"];
    $camera =$_POST["camera"];
    $rating =$_POST["rating"];
    $category =$_POST["category"];

    $query= "update product set item_id=$item_id , item_brand='$item_brand' ,  item_name='$item_name',item_price=$item_price,item_image='$item_image' where item_id=$idupdate";
    $query2="update specifications set item_id=$item_id,product_processor='$processor',product_display='$display',product_ram=$ram,product_storage=$storage,product_camera='$camera',product_rating=$rating,item_cat='$category' where item_id=$idupdate";

    $result =mysqli_query($connect,$query);
    $result2=mysqli_query($connect,$query2);
    if($result2){
        echo '<script>alert("data updated successfully")</script>';
    }else{
        echo '<script>alert("error: data was not updated")</script>';
    }
    if(mysqli_query($connect,$query2)){
        header("location:adminpage.php?updated");
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
<h1>Update the product details below</h1>
<div class="font-rale font-size-14">
    <a href="adminpage.php" class="px-3 border-right border-left text-dark alert-danger">Back to admin page</a>
</div>
<div class ="container box">
    <form method="post" action="">
        <div class="form-group">
            <label>item_id</label>
            <input type="text" name="item_id" id="item_id" value="<?php echo $arrData['item_id'];?>" class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>item_brand</label>
            <input type="text" name="item_brand" id="item_brand" value="<?php echo $arrData['item_brand'];?>" class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>item_name</label>
            <input type="text" name="item_name" id="item_name" value="<?php echo $arrData['item_name'];?>" class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>item_price</label>
            <input type="text" name="item_price" id="item_price" value="<?php echo $arrData['item_price'];?>" class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>item_image</label>
            <input type="text" name="item_image" id="item_image" value="<?php echo $arrData['item_image'];?>" class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>product_processor</label>
            <input type="text" name="processor" id="processor" value="<?php echo $arrData2['product_processor'];?>" class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>product_display</label>
            <input type="text" name="display" id="display" value="<?php echo $arrData2['product_display'];?>"  class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>product_ram</label>
            <input type="text" name="ram" id="ram" value="<?php echo $arrData2['product_ram'];?>"  class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>product_storage</label>
            <input type="text" name="storage" id="storage" value="<?php echo $arrData2['product_storage'];?>"  class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>product_camera</label>
            <input type="text" name="camera" id="camera" value="<?php echo $arrData2['product_camera'];?>" class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>product_rating</label>
            <input type="text" name="rating" id="rating" value="<?php echo $arrData2['product_rating'];?>" class="form-control">
            <br />
        </div>
        <div class="form-group">
            <label>item_category</label>
            <input type="text" name="category" id="category" value="<?php echo $arrData2['item_cat'];?>" class="form-control">
            <br />
        </div>
        <div class="form-group">
            <input type="submit" name="insert-btn" value="UPDATE" class="btn btn-info">
            <br />
        </div>
            <div class="form-group">
                <input type="submit" name="Delete-btn" value="Delete Product" class="btn btn-warning font-size-12">
                <br />
            </div>
    </form>
</div>

</body>
</html>
