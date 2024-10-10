<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>DEMO php</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $name= "PHP";
        $read =true;

        if($read){
            $message= "I am learning $name";}
        else
        {
            $message= "I am not learning $name";
        }

        ?>



    <h1>
       <!-- <?php echo $message ?>" -->
        <?= $message ?>

    </h1>



    
</body>
</html>