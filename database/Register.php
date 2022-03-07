<?php

//REGISTRATION FUNCTIONS
    function validate_input_text($textValue) {
        if(!empty($textValue)) {
            $trim_text = trim($textValue);
            //removes illegal characters
            $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
            return $sanitize_str;
        }
        return'';
    }
    
    function validate_input_email($emailValue) {
        if(!empty($emailValue)) {
            $trim_text = trim($emailValue);
            //removes illegal characters
            $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
            return $sanitize_str;
        }
        return'';
    }

  
    
    //profileImage
    function upload_profile($path, $file){
        $targetDir = $path;
        $default = "./assets/default-profile.png";
    
        //get the filename
        $filename = basename($file['name']);
        $targetFilePath = $targetDir.$filename;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    
        if(!empty($filename)){
            //allow specific file types
            $allowType = array('png', 'jpg', 'jpeg', 'gif', 'pdf');
            if(in_array($fileType, $allowType)){
                //upload file to db
                if(move_uploaded_file($file['tmp_name'], $targetFilePath)){
                    return $targetFilePath;
                }
            }
        }
        //return default image
        return $path .$default;
    }
    
    //get user information
    function get_user_info($con, $user_id) {
        $query = "SELECT first_name, last_name, email, profile_image FROM user WHERE user_id = ?";
        $q = mysqli_stmt_init($con);
    
        mysqli_stmt_prepare($q, $query);
    
        //bind the statement
        mysqli_stmt_bind_param($q, 'i', $user_id);
    
        //execute sql statement
        mysqli_stmt_execute($q);
        $result = mysqli_stmt_get_result($q);
    
        $row = mysqli_fetch_array($result);
        return empty($row)?false:$row;
      
    }

    ?>