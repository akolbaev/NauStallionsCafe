<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <ul class="breadcrumb">
            <li><a href="index.php?page=bulletin_board">Bulletin Board</a></li>
            <li class="active">Selling</li>
        </ul>
    </div>            
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
            echo '<p><img style="width: 300px; height: 225px;" src="'.$row['location'].'"></p>';
            echo '<p class="caption">'.$row['caption'].' </p>';
            echo '<p>Price: $'.$row['price'].' </p>';
            echo '<p>Contact Me: '.$row['contact'].' </p>';
            echo '</div>';
            echo '</div>';
                                    
        }
    echo '</div>';
                            
    echo '</div>';
    echo '</div>';
?>
</body>
</html>