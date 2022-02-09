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

    // get user_id and item_id, insert into cart table
    public function addToCart($userid, $itemid){
        if(isset($userid) && isset($itemid)){
            $params = array('user_id' => $userid, 'item_id' => $itemid);


            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result) {
                // reload page
                header("Location:" . $_SERVER['PHP_SELF']);
            }
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

}


?>