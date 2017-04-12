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
<?php include 'includes/menu.php' ?>
<?php include 'includes/carousel.php' ?>
<?php include 'includes/main.php' ?>
<?php 
	if (isset($_GET['page'])) {
              switch ($_GET['page']) {
                   case 'site_layout':
						include('includes/inc_site_layout.php');
                        break;
                   case 'control_structures':
                        include('includes/inc_control_structures.php');
						break;
					case 'string_functions':
     					include('includes/inc_string_functions.php');
     					break;
					case 'web_forms': 
						include('includes/inc_web_forms.php'); 
						break;
					case 'midterm_assesment':
     					include('includes/inc_midterm_assesment.php');
     					break;
					case 'state_information':
     					include('includes/inc_state_information.php');
     					break;
					case 'user_templates':
     					include('includes/inc_user_templates.php');
     					break;
					case 'final_project':
     					include('includes/inc_final_project.php');
     					break;
					case 'home_page': // A value of
                  // 'home_page' means
                  // to display the
                  // default page
					default:
     					include('includes/inc_home.php');
     					break;
     				}
     			}
    else  {// If no button has been selected, then display
         // the default page
         include('includes/inc_home.php');
     }


 ?>
<?php include 'includes/footer.php' ?>
<?php include 'includes/gotop.php' ?>



   
</body>

</html>