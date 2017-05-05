
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
            <li class="active">Stallion  Classifieds</li>
        </ul>
    </div>            
</div>
 <div class="container " >
               <h1 style="text-align: center;">This is All Posts So Far</h1>
               <hr>
               <div style="text-align: center; padding-bottom: 20px; ">
                <a class="btn btn-success" href="index.php?page=user_post">Post More </a>
                <a class="btn btn-primary" href="index.php?page=bulletin_board">Go to Stallion  Classifieds</a>
            </div>
</div>
                         
<?php 
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-4 panel panel-default">';
    echo '<h2 style="text-align: center;">Selling</h2>';
    echo '<p style="padding:10px;"></p>';

    $email = get_email($_SESSION['email']);

    $result = mysqli_query($conn, "SELECT * , posts.id FROM posts, member WHERE posts.user_id=member.id and member.email='$email' and posts.type = 'selling' ");
    while($row = mysqli_fetch_array($result))
        {   
                                    
            echo '<div class="col-md-6">';
            echo '<div class="thumbnail ">';
            echo '<img style="width: 210px; height: 110px;" src="'.$row['location'].'">';
            echo '<p class="caption" name="caption" id="caption" style="text-align:center; font-size: 15px;"><b>'.$row['caption'].' </b></p>';
            echo '<b>Price:</b> $'.$row['price'].'<br/>';
            echo '<p><b>Contact Me:</b> '.$row['contact'].' </p>';
            echo '<form id="register-form" action="includes/delete.php" method="post" role="form">';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '<button type="submit" class="btn btn-danger btn-block">Delete Post</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';                        
        }
    

    echo '</div>';

   
    echo '<div class="col-md-4 panel panel-default">';
    echo '<h2 style="text-align: center;">Buying</h2>';
    echo '<p style="padding:10px;"></p>';

    $result = mysqli_query($conn, "SELECT *, posts.id FROM posts, member WHERE posts.user_id=member.id and member.email='$email' and posts.type = 'buying' ");
    while($row = mysqli_fetch_array($result))
        {   
                                    
            echo '<div class="col-md-6 ">';
            echo '<div class="thumbnail">';
            echo '<img style="width: 210px; height: 110px;" src="'.$row['location'].'">';
            echo '<p class="caption" name="caption" id="caption" style="text-align:center; font-size: 15px;"><b>'.$row['caption'].' </b></p>';
            echo '<b>Price:</b> $'.$row['price'].'';
            echo '<p><b>Contact Me:</b> '.$row['contact'].' </p>';
            echo '<form id="register-form" action="includes/delete.php" method="post" role="form">';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '<button type="submit" class="btn btn-danger btn-block">Delete Post</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';  
                                    
        }


    
    echo '</div>';

    

    echo '<div class="col-md-4 panel panel-default">';
    echo '<h2 style="text-align: center;">Living</h2>';
    echo '<p style="padding:10px;"></p>';

    $result = mysqli_query($conn, "SELECT *, posts.id FROM posts, member WHERE posts.user_id=member.id and member.email='$email' and posts.type = 'living' ");
    while($row = mysqli_fetch_array($result))
        {   
                                    
            echo '<div class="col-md-6">';
            echo '<div class="thumbnail">';
            echo '<img style="width: 210px; height: 110px;" src="'.$row['location'].'">';
            echo '<p class="caption" name="caption" id="caption" style="text-align:center; font-size: 15px;"><b>'.$row['caption'].' </b></p>';
            echo '<b>Price:</b> $'.$row['price'].'';
            echo '<p><b>Contact Me:</b> '.$row['contact'].' </p>';
            echo '<form id="register-form" action="includes/delete.php" method="post" role="form">';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '<button type="submit" class="btn btn-danger btn-block">Delete Post</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';  
                                    
        }

    echo '</div>';

                         
    echo '</div>';
    echo '</div>';
 ?>

</body>
</html>