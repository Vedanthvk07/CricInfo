
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME | Cric</title>
<?php 
include "includes/header_links.php"
?>
<link href="css/index.css" rel="stylesheet"/>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
        </ol>
    </nav>
    <div id="loading">
    </div>
    
        <div class="banner-container" id="ban" >
            <h2 class="white pb-3 ">The Second home of Cricket </h2>
        
                <form id="search-form" method="POST" action="player_search.php">
                    <div class="input-group city-search">
                        <input type="text" class="form-control " id="player" name="player" placeholder="Enter player name" />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form> 
           
            </div>
        
         <div class="page-container">
            
                <div>
                    <h3>STATS AREA</h3>
                </div>  
                <div class="button-container row justify-content-around">
                    
        
                        <div class="image-container col-md-4 ">
                            <div class="rounded-circle">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#player-modal">
                               <img src="img/download.jpeg" alt="player">
                            </a>
                            <h4>Players</h4>
                            </div>
                        </div>
                        <div class="image-container col-md-4 ">
                            <div class="button">
                            <a href="teams.php">
                               <img src="img/download (1).jpeg"alt="team">
                            </a>
                            <h4>Teams</h4>
                            </div>
                        </div>
                        <div class="image-container col-md-4">
                            <div class="rounded-circle ">
                            <a href="franchises.php">
                               <img src="img/OIP (4).jpeg" alt="franchise">
                            </a>
                            <h4>Franchises</h4>
                            </div>
                        </div>
                    

                    </div>
                
                
               
         </div>
         <div class="modal fade" id="player-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="login-heading">SELECT PLAYERS</h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="mod">
                            <span class="player">
                            <a href="batsmen.php">
                                <img src="img/batsman.jpg">BATSMEN</img>
                            </a>
                            </span>
                            <span class="player">
                            <a href="bowlers.php">
                            <img src="img/bowler.jpg">BOWLERS</img>
                            </a>
                            </span>
                        </div>
                    </div>
            </div>
</div>


              <?php include "includes/footer.php";
               include "includes/login-modal.php";
                    include "includes/admin_modal.php";
                ?>      
        
         
</body>
</html>