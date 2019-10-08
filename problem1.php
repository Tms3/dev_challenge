<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>
<body>
    <?php
    $name            = '';
    $email           = '';
    $twitter         = '';

    class DataException extends Exception {}

    try {
        if(!empty($_POST)){
            if(empty($_POST["name"]) && empty($_POST["email"])){
                throw new DataException('Name and Email are required');
            }
            if(empty($_POST["name"])){
                throw new DataException('Name is required');
            } else {
                $name = clean_input($_POST["name"]);
                // check name only contains letters and whitespace
                if(!preg_match("/^[a-zA-Z ]*$/", $name)){
                    throw new DataException('Only letters and white space allowed');
                } else {
                    if(str_word_count($name) < 2){
                        throw new DataException('FirstName and LastName is required');
                    }
                }
            }
            if(empty($_POST["email"])){
                throw new DataException('Email is required');
            } else {
                $email = clean_input($_POST["email"]);
                // check if e-mail address syntax is valid or not
                if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
                    throw new DataException('Email is invalid');
                }
            }
            //checked vs internet.
            $twitter = clean_input($_POST['twitter']);
            if(!isset($_POST['twitter']) || $_POST['twitter'] === ''){
                $twitter = '';
            } else {
                if(!preg_match('/^(\@)?[A-Za-z0-9_]+$/', $twitter)){
                    throw new DataException('Invalid twitter handle');
                }
            }
        }
    } catch(DataException $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }

    function clean_input($data){
        $data    = trim($data);
        $data    = stripslashes($data);
        $data    = htmlspecialchars($data);
        return $data;
    }


    //php code ends here
    ?>

    <form action="" method="post">
        Name (FirstName and LastName):
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
        *
        <br>
        <br>
        E-mail:
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">    
        <br>
        <br>
        Twitter:
        <input type="text" name="twitter" value="<?php echo htmlspecialchars($twitter); ?>">
        <br>
        <br>
        <input type="submit" name="submit" type="submit" value="Submit">
    </form>
</div>
