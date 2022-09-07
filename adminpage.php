<?php
    session_start();
    if(isset($_GET['updated'])){
        echo '<script>alert ("data updated successfully")</script>';
    }
    if(isset($_['inserted'])) {
        echo '<script>alert("data inserted successfully")</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile DB</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    shuffle($product_shuffle);
    ?>

</head>
<body>
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <?php if(isset($_SESSION['username'])){
             ?><p class="font-rale font-size-12 text-black-50 m-0 alert-success">
            Logged in as <?php echo $_SESSION['username'];?> . Welcome Admin</p><?php

        }?>
         </p>
    <div class="font-rale font-size-14">
        <a href="logout.php" class="px-3 border-right border-left text-dark alert-danger">Logout</a>
        <a href="addProducts.php" class="px-3 border-right text-dark alert-info">add products</a>
    </div>
</div>
    <section id="special-price">
        <div class="container">
            <h4 class="font-rubik font-size-20">All Products</h4>
                <div class="grid">
        <?php $product_fetch=$product->getData();
        array_map(function ($item){ ?>
            <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand" ; ?>">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/products/13.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price'] ?? 0 ?></span>
                            </div>
                            <a href="./updateProduct.php?id=<?php echo $item['item_id'];?>" type="submit" class="btn btn-warning font-size-12"><h6>id:<?php echo $item['item_id'];?></h6> Update Product ?</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }, $product_fetch) ?>
    </div>
        </div>
    </section>
</body>