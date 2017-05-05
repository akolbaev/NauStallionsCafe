<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <ul class="breadcrumb">
            <li><a href="index.php?page=bulletin_board">Stallion  Classifieds</a></li>
            <li class="active">Living</li>
        </ul>
    </div>            
</div>

<?php 
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<h2 style="text-align: center;">Living</h2>';
    echo '<p style="padding:10px;"></p>';
    

    $result = mysqli_query($conn, "SELECT * FROM posts WHERE type = 'living' ");
    while($row = mysqli_fetch_array($result))
        {   
            echo '<div class="col-md-4">';                        
            echo '<div class="col-md-11">';
            echo '<div class="thumbnail">';
            echo '<p><img style="width: 290px; height: 225px;" src="'.$row['location'].'"></p>';
            echo '<p class="caption" style="text-align: center; font-size: 20px;"><b>'.$row['caption'].' </b></p>';
            echo '<p><b>Price:</b> $'.$row['price'].' </p>';
            echo '<p><b>Contact Me:</b> '.$row['contact'].' </p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
                                    
        }
    
                            
    echo '</div>';
    echo '</div>';
?>
</body>
</html>