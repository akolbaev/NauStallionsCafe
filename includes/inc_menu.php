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
                       <div class="table-responsive">
    <table class="table product-table">
        <!--Table head-->
        <thead>
            <tr>
                <th></th>
                <th> <p class="text-muted">Item</p></th>
                <th> <p class="text-muted">Size</p></th>
                <th> <p class="text-muted">Price</p></th>
                <th> <p class="text-muted">Quantity</p></th>
                <th> <p class="text-muted">Amount</p></th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <th scope="row">
                    <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{dish.image}} alt="Uthappizza">
                        </a>
                </th>
                <td>
                    <h4><strong>{{dish.name}}</strong></h4>
                    <p>{{dish.description}}</p>
                </td>
                <td>M</td>
                <td>{{dish.price}}   {{dish.label}}</td>
                 <td>
                    <span class="qty">1 </span>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-sm btn-primary btn-rounded">
                            <input type="radio" name="options" id="option1">&mdash;
                        </label>
                        <label class="btn btn-sm btn-primary btn-rounded">
                            <input type="radio" name="options" id="option2">+
                        </label>
                    </div>
                </td>
            </tr>
        </tbody>
                           </table>
                       </div>
                    
              
                    
                    
                  </li>
                   	
               </ul>
                  
                    
              </div>
                 <!--<div class="tab-content">
                     
                     
               <ul class="media-list tab-pane fade in active">
                   
                       
            
                <li class="media" ng-repeat="dish in menuCtrl.dishes | filter:menuCtrl.filtText">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{dish.image}} alt="Uthappizza">
                        </a>
                    </div>
                  <div class="media-body">
                    <div class="table-responsive">
                        
                    <table id="cart" class="table product-table ">
    				   <thead>
						  <tr>
                            <!--<th></th>
                             <th style="width:50%" class="media-heading"><h4>{{dish.name}}</h4></th> 
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
						 	<th style="width:10%"></th>
                              
                            <th></th>
                            <th>Product</th>
                          <!--  <th>Color</th>
                             <th>Size</th>
                             <th>Price</th>
                             <th>QTY</th>
                             <th>Amount</th>
                            <th></th>
                              
						  </tr>
                       </thead>
                        
                        <tbody>
                            <tr>
                                
                                <td>
                                    <h5><strong>{{dish.name}}</strong></h5>
                                    <p >{{dish.description}}</p>
                                </td>
                                <td data-th="Size">
                                    <input type="number" class="form-control text-center" value="1">
                                </td>
                             
                                                        
                                    
                                    <!--<div class="row, col-sm-10" >
                                          <p>{{dish.description}} </p>
                                      
                        <!--<p>Comment: {{dish.comment}}</p>
                        <p>Type your comment:
                         <input type="text" ng-model="dish.comment"></p> 
                                    </div> 
                               
                                <td>{{dish.price | currency}}</td>
                                  <td>
                    <span class="qty">1 </span>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-sm btn-primary btn-rounded">
                            <input type="radio" name="options" id="option1">&mdash;
                        </label>
                        <label class="btn btn-sm btn-primary btn-rounded">
                            <input type="radio" name="options" id="option2">+
                        </label>
                    </div>
                </td>
                                 <td>{{dish.price}} $</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Remove item">X
                    </button>
                </td>
                          
                             
                            </tr>
                            
                            
                            
                        </tbody>
                        
                        
                     </table>
                        
                        
                      <!--  <h2 class="media-heading">{{dish.name}}
                         <span class="label label-danger">{{dish.label}}</span>
                         <span class="badge">{{dish.price | currency}}</span>
                        
                        </h2>
                        
                      
                    </div>
                    </div>
                    
                    
                </li>
                   	
            </ul>
                   <div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>$50.00</strong></h4>
						</div>
						<div class="col-xs-3">
							<button type="button" class="btn btn-success btn-block">
								Checkout
							</button>
						</div>
					</div>
				</div>
                  
                    
                  </div>-->
                         
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
                           comment: ''
                        },
                        {
                           name:'Custom Omelette',
                           image: 'images/zucchipakoda.png',
                           category: 'appetizer',
                           label:'',
                           price:'3.99',
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
                           comment: ''
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
