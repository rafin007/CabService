<?php require_once(realpath(dirname(__FILE__) ."/../data/employee_data_access.php")); ?>
<?php require_once(realpath(dirname(__FILE__) ."/../data/customer_data_access.php")); ?>
<?php require_once(realpath(dirname(__FILE__) ."/../data/validation_data_access.php")); ?>

<?php

    function checkPerson($username){
        $nameArray = explode("-", $username);
        if(count($nameArray)===2){
            $result = $nameArray[0];
            return $result;
        }
    }

    function validateName($name){
        $status = false;
        if($name == ""){
            return $status;
        }

        if(($name[0] >= 'A' && $name[0] <= 'Z') || ($name[0] >= 'a' && $name[0] <= 'z')){

            for($i=0; $i<strlen($name); $i++){

                if(($name[$i] >= 'A' && $name[$i] <= 'Z') || ($name[$i] >= 'a' && $name[$i] <= 'z') || $name[$i] == '.' || $name[$i] == '-' || $name[$i] == ' '){
                    $status = true;

                }
                else{

                    $status = false;
                    break;
                }
            }
        }
        return $status;
    }

    function validateFullName($name){
        $status = false;
        if($name == ""){
            return $status;
        }

        if(str_word_count($name) <= 1){
            return $status;
        }

        if(($name[0] >= 'A' && $name[0] <= 'Z') || ($name[0] >= 'a' && $name[0] <= 'z')){

            for($i=0; $i<strlen($name); $i++){

                if(($name[$i] >= 'A' && $name[$i] <= 'Z') || ($name[$i] >= 'a' && $name[$i] <= 'z') || $name[$i] == '.' || $name[$i] == '-' || $name[$i] == ' '){
                    $status = true;

                }
                else{

                    $status = false;
                    break;
                }
            }
        }
        return $status;
    }

    function validateEmail($email){
        $email = explode("@", $email);
        $status = false;
    	if(count($email) == 2){
    		$email2 = explode(".", $email[1]);
    		if(count($email2) == 2){
    			$status = true;
    		}
    	}
        return $status;
    }

    function validateUsername($username){
        $status = true;
    	if($username == ""){
    		$status = false;
    	}

        if(strlen($username) < 2){
            $status = false;
        }

        for($i=0; $i<strlen($username); $i++){

        	if(($username[$i] >= 'A' && $username[$i] <= 'Z') || ($username[$i] >= 'a' && $username[$i] <= 'z') || $username[$i] == '-'){
        		$status = true;
        	}
        	else{
        		$status = false;
        		break;
        	}
        }
        return $status;
    }

    function validatePhone($phone){
        $status = false;
        if(preg_match("/[0][1](7|6|8|9|1|5)[0-9]{8}$/", $phone) && strlen($phone)===11) {
            $status = true;
        }
        return $status;
    }

    function checkPassword($password){
        $status = true;
        if($password === ""){
            $status = false;
        }
        return $status;
    }

    function validatePasswords($password, $confirmpassword){
        $status = false;
        if($password === $confirmpassword){
            $status = true;
        }
        return $status;
    }

?>
