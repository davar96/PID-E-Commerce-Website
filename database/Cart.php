<?php 

class Cart{
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public function insertIntoCart($params = null, $table = "cart"){
        if($this->db->con != null){
            if($params != null){
                $columns = implode(',', array_keys($params));
                // print_r($columns);
                $values = implode(',', array_values($params));
                // print_r($values);

                // create sql query
                $query_string = sprintf("INSERT INTO %s (%s) VALUES (%s)", $table, $columns, $values);
                // echo $query_string;

                // Execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }
    public function getCartData($user_id){
        // SELECT p.*, c.qty FROM cart c INNER JOIN product p on c.item_id=p.item_id WHERE c.user_id=22
        //$result = $this->db->con->query("SELECT p.*, c.qty FROM cart c INNER JOIN product p on c.item_id=p.item_id WHERE c.user_id=$user_id");
        
        $result = $this->db->con->query("SELECT * FROM cart JOIN product on cart.item_id=product.item_id WHERE cart.user_id=$user_id");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function getUserCartProduct($user_id, $item_id) {
        if(isset($item_id)){
            $result = $this->db->con->query("SELECT p.*, c.qty FROM cart c INNER JOIN product p on c.item_id=p.item_id WHERE c.user_id=$user_id AND c.item_id = $item_id");
            
            $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
        }
    }

    // get user_id and item_id, insert into cart table
    public function addToCart($userid, $itemid){
        if(isset($userid) && isset($itemid)){
            $result = $this->db->con->query("SELECT * FROM cart WHERE user_id=$userid AND item_id=$itemid");
            if(mysqli_num_rows($result)==1){
                $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $old_qty = $item['qty'];
                $qty = $old_qty + 1;
                $params = array('user_id' => $userid, 'item_id' => $itemid ,'qty'=>$qty);
                // insert data into cart
                $result = $this->insertIntoCart($params);
                if ($result) {
                    // reload page
                    header("Location:" . $_SERVER['PHP_SELF']);
                }
            }else{
                $params = array('user_id' => $userid, 'item_id' => $itemid ,'qty'=>1);
                // insert data into cart
                $result = $this->insertIntoCart($params);
                if ($result) {
                    // reload page
                    header("Location:" . $_SERVER['PHP_SELF']);
                }
            }
        }
    }

    // delete cart item using cart item id
    public function deleteCart($item_id = null, $table = 'cart'){
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
        if($item_id != null && $user_id!=0){

            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id = {$item_id} AND user_id={$user_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

     // delete wishlist item using wishlist item id
     public function deleteWishlist($item_id = null, $table = 'wishlist'){
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
        if($item_id != null && $user_id!=0){

            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id = {$item_id} AND user_id={$user_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }


    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f', $sum);
        }
    }

    // get item_id of shopping cart list
    public function getCartId($cartArray = null, $key = "item_id"){
        if($cartArray != null){
            $cart_id = array_map(function($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    // Save for later
    public function sendToWishlist($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
        if($item_id != null && $user_id!=0){
            $result = $this->db->con->query("SELECT * FROM cart WHERE user_id=$user_id AND item_id=$item_id");
            if(mysqli_num_rows($result)==1){
                $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $params = array('user_id' => $user_id, 'item_id' => $item_id );
                // insert data into cart
                $result = $this->insertIntoCart($params,'wishlist');
                $cart_id = $item['cart_id'];
                $query = "DELETE FROM cart WHERE cart_id = {$cart_id};";
                $result = $this->db->con->query($query);
                if($result){
                    header("Location:".$_SERVER['PHP_SELF']);
                }
                return $result;
            }
        }
    }

    // Save for later
    public function sendToCart($item_id = null, $saveTable = "cart", $fromTable = "wishlist"){
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
        if($item_id != null && $user_id!=0){
            $result = $this->db->con->query("SELECT * FROM wishlist WHERE user_id=$user_id AND item_id=$item_id");
            if(mysqli_num_rows($result)==1){
                $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $params = array('user_id' => $user_id, 'item_id' => $item_id );
                // insert data into cart
                $result = $this->insertIntoCart($params,'cart');
                $id_wishlist = $item['id_wishlist'];
                $query = "DELETE FROM wishlist WHERE id_wishlist = {$id_wishlist};";
                $result = $this->db->con->query($query);
                if($result){
                    header("Location:".$_SERVER['PHP_SELF']);
                }
                return $result;
            }
        }
    }

}


?>