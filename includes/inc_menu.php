<!DOCTYPE html>
<html lang="en" ng-app="Project1">

  
 
<head>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head
         content must come *after* these tags -->
    <title></title>

        <!-- Bootstrap -->
   
    
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
 
<body>
      <div id="backgroundimage">
          <div id="backgroundimage-overlay">
      

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
                                        
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"
                     ng-class="{active:menuCtrl.isSelected(1)}">
                    <a ng-click="menuCtrl.select(1)"
                     aria-controls="all menu"
                     role="tab">The Menu</a></li>
                    <li role="presentation"
                     ng-class="{active:menuCtrl.isSelected(2)}">
                    <a ng-click="menuCtrl.select(2)"
                     aria-controls="appetizers"
                     role="tab">Appetizers</a></li>
                    <li role="presentation"
                     ng-class="{active:menuCtrl.isSelected(3)}">
                    <a ng-click="menuCtrl.select(3)"
                     aria-controls="mains"
                     role="tab">Mains</a></li>
                    <li role="presentation"
                     ng-class="{active:menuCtrl.isSelected(4)}">
                    <a  ng-click="menuCtrl.select(4)"
                     aria-controls="desserts"
                     role="tab">Desserts</a></li>
                </ul>
                        
                 <div class="tab-content">
               <ul class="media-list tab-pane fade in active">
                       
            
                <li class="media" ng-repeat="dish in menuCtrl.dishes | filter:menuCtrl.filtText">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{dish.image}} alt="Uthappizza">
                        </a>
                    </div>
                    <div class="media-body">
                             <table id="cart" class="table table-hover table condensed">
                                  
                        <thead class="media-heading">
                            <tr>
                              
                                <th style="width:50%">
                        {{dish.name}}                            
                         <span class="label label-danger">{{dish.label}}</span> </th>
                                
                                 
                                <th style="width:10%">
                         <span class="badge">{{dish.price | currency}}</span></th>
                            <th style="width:8%"><span class="quantity">{{dish.quantity | number}}</span></th>
                                </tr>
                           
                        </thead>
                                 <p>{{dish.description}}</p>
                        <!--<p>Comment: {{dish.comment}}</p>
                        <p>Type your comment:
                         <input type="text" ng-model="dish.comment"></p> -->
                        
                       
                              </table>
                    </div>
                </li>
            </ul>
                    
                  </div>
                         
            </div>
            </div>
            
           
            </div>
        </div>
  
       </div>
    </div>


    <!-- Include all compiled plugins (below), or include individual files as needed -->

 
<script src="bower_components/angular/angular.min.js"></script>
 <script src="scripts/app.js"></script>   

    <script>

        var app = angular.module('Project1',[]);
        app.controller('menuController', function() {
            this.tab = 1;
            this.filtText = '';
             
            
  
            
               var dishes=[
                         {
                           name:'Breakfast Croissant',
                           image: 'images/uthapizza.png',
                           category: 'mains',
                           label:'Hot',
                           price:'4.99',
                           description:'Scrambled eggs with sausage, ham or bacon, topped with fresh cheddar on a flaky butter croissant.',
                           comment: '',
                           quantity: ''
                        },
                        {
                           name:'Custom Omelette',
                           image: 'images/zucchipakoda.png',
                           category: 'appetizer',
                           label:'',
                           price:'3.99',
                           description:'Made to order with any three fresh ingredients served with a flaky butter croissant. Ingredients: Vegetables - Spinach, Tomatoes, Mushrooms, Onions, Red Bell Peppers, Green Onions, Potato Galette Meats - Chicken, Sausage, Chorizo Cheeses - Cheddar, Swiss, Brie, Goat Cheese, Parmesan Make it a Smart Choice omelette with egg whites and a baguette. Spinach, Tomatoes, Mushrooms, Onions, Red Bell Peppers, Green Onions',
                           comment: '',
                           quantity: ''
                        },
                        {
                           name:'Speciality Coffee',
                           image: 'images/vadonut.png',
                           category: 'appetizer',
                           label:'New',
                           price:'1.99',
                           description:'Specialty coffees crafted for you as a single or double. French Roast, Decaf French Roast, Cappuccino, Cafe Latte, American Roast, Cafe Mocha, Espresso, Hot Chocolate, Cafe Americano.',
                           comment: '',
                           quantity: ''
                        },
                        {
                           name:'ElaiCheese Cake',
                           image: 'images/elaicheesecake.png',
                           category: 'dessert',
                           label:'',
                           price:'2.99',
                           description:'A delectable, semi-sweet New York Style Cheese Cake, with Graham cracker crust and spiced with Indian cardamoms',
                           comment: '',
                           quantity: ''
                        },
                         {
                           name:'French Cake',
                           image: 'images/elaicheesecake.png',
                           category: 'dessert',
                           label:'',
                           price:'2.99',
                           description:'A delectable, semi-sweet New York Style Cheese Cake, with Graham cracker crust and spiced with Indian cardamoms',
                           comment: ''
                        }
                   ,
                         {
                           name:'French Cake',
                           image: 'images/elaicheesecake.png',
                           category: 'dessert',
                           label:'',
                           price:'2.99',
                           description:'A delectable, semi-sweet New York Style Cheese Cake, with Graham cracker crust and spiced with Indian cardamoms',
                           comment: '',
                           quantity: ''
                        }
                        ];

            this.dishes = dishes;
            
            this.select = function(setTab) {
    this.tab = setTab;
    
    if (setTab === 2) {
      this.filtText = "appetizer";
    } 
    else if (setTab === 3) {
      this.filtText = "mains";
    }
    else if (setTab === 4) {
      this.filtText = "dessert";
    }
    else {
      this.filtText = "";
    }
  };
  
  this.isSelected = function (checkTab) {
    return (this.tab === checkTab);
  };

        });

    </script>
    
</body>


</html>
