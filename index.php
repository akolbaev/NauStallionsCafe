

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->
    
        <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/navslide.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/homepage.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src=”//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js”></script>
    
    <title>NAU COFFEEHOUSE</title>
    
    
</head>

<body>
<?php include 'includes/inc_header.php' ?>
<?php 
	
	if (isset($_GET['page'])) {
              switch ($_GET['page']) {
                   case 'home_page':
						include('includes/inc_home_page.php');
                        break;
                   case 'menu':
                        include('includes/inc_menu.php');
						break;
					case 'bulletin_board':
     					include('includes/inc_bulletin_board.php');
     					break;
					case 'contact_us': 
						include('contact_us.php'); 
						break;
					case 'login_page':
     					include('signin.php');
     					break;
                    case 'signup_page':
                        include('signup.php');
                        break;
					case 'forgot_password':
     					include('includes/inc_forgot_password.php');
     					break;
                    case 'thanks_message':
                        include('thanks.php');
                        break;
					case 'bulletin_selling':
     					include('includes/inc_bulletin_selling.php');
     					break;
					case 'bulletin_buying':
     					include('includes/inc_bulletin_buying.php');
     					break;
     				case 'bulletin_living':
     					include('includes/inc_bulletin_living.php');
     					break;
					case 'home_page': // A value of
                  // 'home_page' means
                  // to display the
                  // default page
					default:
     					include('includes/inc_home_page.php');
     					break;
     				}
     			}
    else  {// If no button has been selected, then display
         // the default page
         include('includes/inc_home_page.php');
     }


 ?>
<?php include 'includes/inc_footer.php' ?>
<?php include 'includes/inc_gotop.php' ?>



   
</body>

</html>
