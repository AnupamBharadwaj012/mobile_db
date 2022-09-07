<?php
ob_start();
session_start();
// include header.php file
include ('header.php');
$nm=$_SESSION['username'];
$uid = $user->getUid($nm);
?>

<?php


    /*  include cart items if it is not empty */
        count($product->getUserCart($uid['user_id'])) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');
    /*  include cart items if it is not empty */

        /*  include top sale section */
        count($product->getUserWishlist($uid['user_id'])) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
        /*  include top sale section */


    /*  include top sale section */
        include ('Template/_top-sale.php');
    /*  include top sale section */

?>

<?php
// include footer.php file
include ('footer.php');
?>


