<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->
    
   
   <?php  include_once 'scripts/scripts.php'; ?>
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
                        include('menu.php');
						break;
                    case'cartupdate':
                        include('includes/cart_update');
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
                    case 'user':
                        include('includes/inc_user.php');
                        break;
					case 'forgot_password':
     					include('includes/inc_forgot_password.php');
     					break;
                    case 'thanks_message':
                        include('thanks.php');
                        break;
                    case 'user_post':
                        include('includes/inc_post.php');
                        break;
                    case 'user_posts':
                        include('includes/inc_individual.php');
                        break;
                     case 'user_submit':
                        include('congratulations.php');
                        break;
                    case 'user_profile':
                        include('includes/inc_user_profile.php');
                        break;
                    case 'logout_page':
                        include('includes/inc_logout.php');
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