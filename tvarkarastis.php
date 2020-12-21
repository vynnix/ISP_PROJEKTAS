

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>GYM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style type="text/css">
    
.bg-light-gray {
    background-color: #f7f7f7;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}


.bg-sky.box-shadow {
    box-shadow: 0px 5px 0px 0px #00a2a7
}

.bg-orange.box-shadow {
    box-shadow: 0px 5px 0px 0px #af4305
}

.bg-green.box-shadow {
    box-shadow: 0px 5px 0px 0px #4ca520
}

.bg-yellow.box-shadow {
    box-shadow: 0px 5px 0px 0px #dcbf02
}

.bg-pink.box-shadow {
    box-shadow: 0px 5px 0px 0px #e82d8b
}

.bg-purple.box-shadow {
    box-shadow: 0px 5px 0px 0px #8343e8
}

.bg-lightred.box-shadow {
    box-shadow: 0px 5px 0px 0px #d84213
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #e95601
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}

.padding-15px-lr {
    padding-left: 15px;
    padding-right: 15px;
}
.padding-5px-tb {
    padding-top: 5px;
    padding-bottom: 5px;
}
.margin-10px-bottom {
    margin-bottom: 10px;
}
.border-radius-5 {
    border-radius: 5px;
}

.margin-10px-top {
    margin-top: 10px;
}
.font-size14 {
    font-size: 14px;
}

.text-light-gray {
    color: #d6d5d5;
}
.font-size13 {
    font-size: 13px;
}

.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
    </style>
</head>
<body>
<?php include('./include/navbar.php'); 
require_once('./include/mysql_connect.php');
  $profilio_id= $_SESSION["profilio_id"];
 ?>
    <div class="container-fixed">
      
        
<div class="container">
                <div class="timetable-img text-center">
                    <img src="img/content/timetable.png" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="bg-light-gray">
                                <th class="text-uppercase">Laikas
                                </th>
                                <th class="text-uppercase">Pirmadienis</th>
                                <th class="text-uppercase">Antradienis</th>
                                <th class="text-uppercase">Trečiadienis</th>
                                <th class="text-uppercase">Ketvirtadienis</th>
                                <th class="text-uppercase">Penktadienis</th>
                                <th class="text-uppercase">Šeštadienis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">09:00am</td>

                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 1 AND ivykiai.laikas_fk = 1";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 2 AND ivykiai.laikas_fk = 1";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>


<?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 3 AND ivykiai.laikas_fk = 1";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>












<?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 4 AND ivykiai.laikas_fk = 1";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>


<?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 5 AND ivykiai.laikas_fk = 1";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>

<?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 6 AND ivykiai.laikas_fk = 1";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>






                            </tr>

                            <tr>
                                <td class="align-middle">10:00am</td>

                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 1 AND ivykiai.laikas_fk = 2";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">10:00-11:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>


<?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 2 AND ivykiai.laikas_fk = 2";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">10:00-11:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>



<?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 3 AND ivykiai.laikas_fk = 2";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">10:00-11:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>


<?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 4 AND ivykiai.laikas_fk = 2";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">10:00-11:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>

   
<?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 5 AND ivykiai.laikas_fk = 2";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">10:00-11:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>

<?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 6 AND ivykiai.laikas_fk = 2";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">10:00-11:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>


                            </tr>

                            <tr>
                                <td class="align-middle">11:00am</td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Pertrauka</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Pertrauka</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Pertrauka</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Pertrauka</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Pertrauka</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Pertrauka</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">12:00pm</td>

                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 1 AND ivykiai.laikas_fk = 3";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">12:00-13:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>

<?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 2 AND ivykiai.laikas_fk = 3";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">12:00-13:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                  <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 3 AND ivykiai.laikas_fk = 3";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">12:00-13:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 4 AND ivykiai.laikas_fk = 3";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">12:00-13:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 5 AND ivykiai.laikas_fk = 3";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">12:00-13:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 6 AND ivykiai.laikas_fk = 3";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">12:00-13:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                            </tr>

                            <tr>
                                <td class="align-middle">01:00pm</td>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 1 AND ivykiai.laikas_fk = 4";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">13:00-14:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 2 AND ivykiai.laikas_fk = 4";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">13:00-14:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 3 AND ivykiai.laikas_fk = 4";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">13:00-14:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 4 AND ivykiai.laikas_fk = 4";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">13:00-14:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 5 AND ivykiai.laikas_fk = 4";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">13:00-14:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 6 AND ivykiai.laikas_fk = 4";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">13:00-14:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                            </tr>
                            <tr>
                                <td class="align-middle">02:00pm</td>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 1 AND ivykiai.laikas_fk = 5";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">14:00-15:00</div>
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 2 AND ivykiai.laikas_fk = 5";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">14:00-15:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 3 AND ivykiai.laikas_fk = 5";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">14:00-15:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 4 AND ivykiai.laikas_fk = 5";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">14:00-15:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 5 AND ivykiai.laikas_fk = 5";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">14:00-15:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 6 AND ivykiai.laikas_fk = 5";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">14:00-15:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                            </tr>
                            <tr>
                                <td class="align-middle">03:00pm</td>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 1 AND ivykiai.laikas_fk = 6";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">15:00-16:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 2 AND ivykiai.laikas_fk = 6";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">15:00-16:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 3 AND ivykiai.laikas_fk = 6";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">15:00-16:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 4 AND ivykiai.laikas_fk = 6";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">15:00-16:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 5 AND ivykiai.laikas_fk = 6";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">15:00-16:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                                <?php
                                    
                                    $sql = "SELECT ivykiai.pavadinimas as pavadinimas, ivykiai.data_fk as data, ivykiai.laikas_fk as laikas, ivykiu_registracija.ivykio_id FROM `ivykiu_registracija` INNER JOIN ivykiai ON ivykiu_registracija.ivykio_id = ivykiai.ivykio_id WHERE profilio_id = $profilio_id AND ivykiai.data_fk = 6 AND ivykiai.laikas_fk = 6";
                                    $result = mysqli_query($dbc, $sql);
                                    $row = mysqli_fetch_array($result);                                   
                                    
                                    if(isset($row['pavadinimas']))
                                    {
                                        ?>
                                        <td>                                  

                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13"><?php echo "".$row['pavadinimas'].""; ?></span>
                                        <div class="margin-10px-top font-size14">15:00-16:00</div>
                                        
                                        </td>
                                        
                                 <?php   }

                                    else 

                                    {
                                        ?>
                                         <td class="bg-light-gray">

                                        </td>
                                    <?php }
                                    
                                    ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>