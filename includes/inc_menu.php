<!DOCTYPE html>
<html lang="en" ng-app="Project1">

<head>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head
         content must come *after* these tags -->
    <title></title>

        <!-- Bootstrap -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">
    
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
 
<body>
      

     <div>
         <div class="row">
            <div class="col-xs-12">
               <ul class="breadcrumb">
                   <li><a href="index.html">Home</a></li>
                   <li class="active">Menu</li>
               </ul>
            </div>            
        </div>
    </div>
    
 <div class="container">
        <div class="row row-content">
             <div class="row row-content" ng-controller="menuController as menuCtrl">
                      <div class="col-xs-12">
               <ul class="media-list">
                <li class="media" ng-repeat="dish in menuCtrl.dishes">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{dish.image}} alt="Uthappizza">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">{{dish.name}}
                         <span class="label label-danger">{{dish.label}}</span>
                         <span class="badge">{{dish.price | currency}}</span></h2>
                        <p>{{dish.description}}</p>
                        <p>Comment: {{dish.comment}}</p>
                        <p>Type your comment:
                         <input type="text" ng-model="dish.comment"></p>
                    </div>
                </li>
            </ul>
            </div>
            </div>
            
           
            </div>
        </div>
  
   


    <!-- Include all compiled plugins (below), or include individual files as needed -->



<script src="bower_components/angular/angular.min.js"></script>
    <script>

        var app = angular.module('Project1',[]);
        app.controller('menuController', function() {
               var dishes=[
                         {
                           name:'Breakfast Croissant',
                           image: 'images/uthapizza.png',
                           category: 'mains',
                           label:'Hot',
                           price:'4.99',
                           description:'Scrambled eggs with sausage, ham or bacon, topped with fresh cheddar on a flaky butter croissant.',
                           comment: ''
                        },
                        {
                           name:'Custom Omelette',
                           image: 'images/zucchipakoda.png',
                           category: 'appetizer',
                           label:'',
                           price:'1.99',
                           description:'Made to order with any three fresh ingredients served with a flaky butter croissant. Ingredients: Vegetables - Spinach, Tomatoes, Mushrooms, Onions, Red Bell Peppers, Green Onions, Potato Galette Meats - Chicken, Sausage, Chorizo Cheeses - Cheddar, Swiss, Brie, Goat Cheese, Parmesan Make it a Smart Choice omelette with egg whites and a baguette. Spinach, Tomatoes, Mushrooms, Onions, Red Bell Peppers, Green Onions',
                           comment: ''
                        },
                        {
                           name:'Speciality Coffee',
                           image: 'images/vadonut.png',
                           category: 'appetizer',
                           label:'New',
                           price:'1.99',
                           description:'Specialty coffees crafted for you as a single or double. French Roast, Decaf French Roast, Cappuccino, Cafe Latte, American Roast, Cafe Mocha, Espresso, Hot Chocolate, Cafe Americano.',
                           comment: ''
                        },
                        {
                           name:'ElaiCheese Cake',
                           image: 'images/elaicheesecake.png',
                           category: 'dessert',
                           label:'',
                           price:'2.99',
                           description:'A delectable, semi-sweet New York Style Cheese Cake, with Graham cracker crust and spiced with Indian cardamoms',
                           comment: ''
                        }
                        ];

            this.dishes = dishes;

        });

    </script>
    
</body>


</html>
