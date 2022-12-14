<?php

// php cart class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
//    }
//    $s = "select * from user where email = '$email'";
//
//    $user_ID = mysqli_query($con,$s);
    // insert into cart table
    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con != null){
            if ($params != null){
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get user_id and item_id and insert into cart table
    public  function addToCart($userid, $itemid){
        if (isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result){
                // Reload Page
                header("Location:cart.php ");
            }
        }
    }

    // delete cart item using cart item id
    public function deleteCart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:cart.php");
            }
            return $result;
        }
    }
    public function deleteWishlist($item_id = null, $table = 'wishlist'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:cart.php");
            }
            return $result;
        }
    }

    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    // get item_it of shopping cart list
    public function getCartId($cartArray = null, $key = "item_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    // Save for later
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";

            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location:cart.php" );
            }
            return $result;
        }
    }
//    public function purchase($user_id, $fromTable = "cart")
//    {
//        if ($user_id != null){
//        $query = "DELETE FROM {$fromTable} WHERE user_id='$user_id';";
////            print_r($query);
//        // execute multiple query
//        $result = $this->db->con->query($query);
//        if ($result) {
//            header("Location:cart.php");
//        }
//        return $result;
//        }
//    }
//    public function getUserCart($name1){
//        $result = $this->db->con->query("SELECT * FROM cart WHERE name = 'name1'");
//
//        $resultArray = array();
//
//        // fetch product data one by one
//        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
//            $resultArray[] = $item;
//        }
//
//        return $resultArray;
//    }
//    public function getCart($userid){
//        $result = $this->db->con->query("SELECT p.item_id,item_brand,item_name,item_price,item_image FROM product p,cart c where p.item_id=c.item_id and c.user_id={$userid}");
//
//        $resultArray = array();
//
//        // fetch product data one by one
//        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
//            $resultArray[] = $item;
//        }
//
//        return $resultArray;
//    }


}