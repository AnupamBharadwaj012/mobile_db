<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    }
    // include header.php file
    include ('header.php');

?>
<?php
if(isset($_GET['purchased'])){
    echo '<script>alert ("Products purchased successfully")</script>';
}
if(isset($_GET['subscribed'])){
    echo '<script>alert ("Thank You For Subscribing . We assure you that your data is safe with us")</script>';
}
?>
<?php

    /*  include banner area  */
        include ('Template/_banner-area.php');
    /*  include banner area  */

    /*  include top sale section */
        include ('Template/_top-sale.php');
    /*  include top sale section */

    /*  include special price section  */
         include ('Template/_special-price.php');
    /*  include special price section  */

    /*  include special budget section  */
//    include ('Template/_budgetpage.php');
    /*  include special budget section  */

//    /*  include banner ads  */
//        include ('Template/_banner-ads.php');
//    /*  include banner ads  */
//
//    /*  include new phones section  */
//        include ('Template/_new-phones.php');
//    /*  include new phones section  */
//
//    /*  include blog area  */
//         include ('Template/_blogs.php');
//    /*  include blog area  */

?>


<?php
// include footer.php file
include ('footer.php');
?>