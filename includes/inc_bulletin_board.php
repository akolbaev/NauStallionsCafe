<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <ul class="breadcrumb">
            <li><a href="index.php?page=home_page">Home</a></li>
            <li class="active">Bulletin Board</li>
        </ul>
    </div>            
</div>
 <div class="container " >
               <h1 style="text-align: center;">Bulletin Board</h1>
               <hr>
</div>
                         
<?php 
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-4">';
    echo '<h2 style="text-align: center;">Selling</h2>';
    echo '<p style="padding:10px;"></p>';

    $result = mysqli_query($conn, "SELECT * FROM posts WHERE type = 'selling' ");
    while($row = mysqli_fetch_array($result))
        {   
                                    
            echo '<div class="col-md-6">';
            echo '<div class="thumbnail">';
            echo '<img style="width: 210px; height: 110px;" src="'.$row['location'].'">';
<<<<<<< HEAD
            echo '<p class="caption" style="text-align:center; font-size: 15px;"><b>'.$row['caption'].' </b></p>';
            echo '<b>Price:</b> $'.$row['price'].'';
            echo '<p><b>Contact Me:</b> '.$row['contact'].' </p>';
=======
            echo '<p class="caption">'.$row['caption'].' </p>';
            echo 'Price: $'.$row['price'].'';
            echo '<p>Contact Me: '.$row['contact'].' </p>';
>>>>>>> d43350e2acdeafc2c8055ca033d8a16d3dea6e1b
            echo '</div>';
            echo '</div>';                        
        }
    

    echo '</div>';

   
    echo '<div class="col-md-4">';
    echo '<h2 style="text-align: center;">Buying</h2>';
    echo '<p style="padding:10px;"></p>';

    $result = mysqli_query($conn, "SELECT * FROM posts WHERE type = 'buying' ");
    while($row = mysqli_fetch_array($result))
        {   
                                    
            echo '<div class="col-md-6">';
            echo '<div class="thumbnail">';
            echo '<img style="width: 210px; height: 110px;" src="'.$row['location'].'">';
<<<<<<< HEAD
            echo '<p class="caption" style="text-align:center; font-size: 15px;"><b>'.$row['caption'].' </b></p>';
            echo '<b>Price:</b> $'.$row['price'].'';
            echo '<p><b>Contact Me:</b> '.$row['contact'].' </p>';
=======
            echo '<p class="caption">'.$row['caption'].' </p>';
            echo 'Price: $'.$row['price'].'';
            echo '<p>Contact Me: '.$row['contact'].' </p>';
            echo '</div>';
>>>>>>> d43350e2acdeafc2c8055ca033d8a16d3dea6e1b
            echo '</div>';
            echo '</div>'; 
                                    
        }


    
    echo '</div>';

    

    echo '<div class="col-md-4">';
    echo '<h2 style="text-align: center;">Living</h2>';
    echo '<p style="padding:10px;"></p>';

    $result = mysqli_query($conn, "SELECT * FROM posts WHERE type = 'living' ");
    while($row = mysqli_fetch_array($result))
        {   
                                    
            echo '<div class="col-md-6">';
            echo '<div class="thumbnail">';
            echo '<img style="width: 210px; height: 110px;" src="'.$row['location'].'">';
<<<<<<< HEAD
            echo '<p class="caption" style="text-align:center; font-size: 15px;"><b>'.$row['caption'].' </b></p>';
            echo '<b>Price:</b> $'.$row['price'].'';
            echo '<p><b>Contact Me:</b> '.$row['contact'].' </p>';
=======
            echo '<p class="caption">'.$row['caption'].' </p>';
            echo 'Price: $'.$row['price'].'';
            echo '<p>Contact Me: '.$row['contact'].' </p>';
            echo '</div>';
>>>>>>> d43350e2acdeafc2c8055ca033d8a16d3dea6e1b
            echo '</div>';
            echo '</div>'; 
                                    
        }

    echo '</div>';

                         
    echo '</div>';
    echo '</div>';
 ?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div style="text-align: center; padding-bottom: 20px; ">
                <a class="btn btn-primary btn-block" href="index.php?page=bulletin_selling">View More . . .</a>
            </div>
        </div>
        <div class="col-md-4">
            <div style="text-align: center; padding-bottom: 20px; ">
                <a class="btn btn-primary btn-block" href="index.php?page=bulletin_buying">View More . . .</a>
            </div>
        </div>
        <div class="col-md-4">
            <div style="text-align: center; padding-bottom: 20px; ">
                <a class="btn btn-primary btn-block" href="index.php?page=bulletin_living">View More . . .</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>