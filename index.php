<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home page</title>
   <?php include "common/pageHeader.php" ?>
</head>
<body>

<?php

include 'common/header.php'

?>
    <h1>This is my first project</h1>

    

    <?php 
    
    
    $services=Array(
        Array( 
            "icon"=>"work",
            "title"=>"Web Development",
            "content"=>"We provide custom website development to enterprise/companies"
        ),
        Array( 
            "icon"=>"development",
            "title"=>"Android  Development",
            "content"=>"We provide custom website development to enterprise/companies"
        )
        ,
        Array( 
            "icon"=>"Training",
            "title"=>"Training",
            "content"=>"We provide custom website development to enterprise/companies"
        )
        ,
        Array( 
            "icon"=>"Training",
            "title"=>"Training",
            "content"=>"We provide custom website development to enterprise/companies"
        )
        ,
        Array( 
            "icon"=>"Training",
            "title"=>"Training",
            "content"=>"We provide custom website development to enterprise/companies"
        )
        ,
        Array( 
            "icon"=>"Training",
            "title"=>"Training",
            "content"=>"We provide custom website development to enterprise/companies"
        )
        ,
        Array( 
            "icon"=>"Training",
            "title"=>"Training",
            "content"=>"We provide custom website development to enterprise/companies"
        )
        ,
        Array( 
            "icon"=>"Training",
            "title"=>"Training",
            "content"=>"We provide custom website development to enterprise/companies"
        )
        ,
        Array( 
            "icon"=>"Training",
            "title"=>"Training",
            "content"=>"We provide custom website development to enterprise/companies"
        )
        ,
        Array( 
            "icon"=>"Training",
            "title"=>"Training",
            "content"=>"We provide custom website development to enterprise/companies"
        )
        ,
        Array( 
            "icon"=>"Training",
            "title"=>"Training",
            "content"=>"We provide custom website development to enterprise/companies"
        )
        ,
        Array( 
            "icon"=>"Internship",
            "title"=>"Internship",
            "content"=>"We provide custom website development to enterprise/companies"
        )
    );



    ?>

    <div class="container">

    <?php


   for($i=0;$i<sizeof($services);$i++){ 

    ?>  

  <div class="service-container">
    <i> <?= $services[$i]['icon'] ?></i>
    <h1>
        <?= $services[$i]['title'] ?>
    </h1>
    <p>
    <?= $services[$i]['content'] ?>
    </p>
    <button>More</button>
  </div>
  
    <?php
   }

   ?>

</div>

<?php

?>



<?php include 'common/pageJs.php' ?>



   

</body>
</html>