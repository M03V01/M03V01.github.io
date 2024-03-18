<!doctype html>
<html><head>
<meta charset="utf-8">
<title>thank you</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com"><!--font-->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><!--font-->
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400&display=swap" rel="stylesheet"><!--font-->
<?php 
    $nome = $_POST['nome'];    
        ?>

<style type="text/css">
        body { background-image: url("images/thankyou.jpg");background-size: cover;
    background-repeat: no-repeat; align-content: center; justify-content: flex-end; text-align: center; text-transform: uppercase; width:80%; margin-left:auto; margin-right:auto;}
</style>

</head>

<body>
    
    <div><span style=" width: 1140px; height:400px;
        margin-left: auto; margin-right:auto; align-self: center;">
    <h3><span style="text-justify:inherit;">
  <?php 
            echo "Ciao " . $nome . ", grazie per averci contattato, ti faremo sapere al più presto.";  
    
        
        ?>
    </span></h3>
        </span></div>
</body>
</html>
