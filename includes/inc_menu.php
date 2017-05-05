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
    
    
 
<body >
    
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
                     
               <section class="shopping-cart">    
               <ul class="media-list tab-pane fade in active">
                   
                       
            
                <li class="media" id="shopping-cart" ng-repeat="product in menuCtrl.products | filter:menuCtrl.filtText">
                   <!-- <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{dish.image}} alt="Uthappizza">
                        </a>
                    </div>-->
    
         
        <ol class="ui-list shopping-cart--list" id="shopping-cart--list">  
             <div class="media-body" id="shopping-cart--list-item-template" type="text/template">
                 
            <li class="_grid shopping-cart--list-item">
          <div class="_column product-image">
            <a href="#">
                        <img class="media-object img-thumbnail"
                         ng-src={{product.image}} alt="Uthappizza">
                        </a>
          </div>
          <div class="_column product-info">
            <h8 class="product-name">{{product.name}} <label class="productPrice">,  {{product.price}}, {{product.label}}</label></h8>
             <!-- <div class="price product-single-price">${{dish.price}}</div>-->
            <p class="product-desc">{{product.description}}</p>
            
          </div>
          <div class="_column product-modifiers" data-product-price="{{product.price}}">
            <div class="_grid">
              <button class="_btn _column product-subtract">&minus;</button>
              <div class="_column product-qty">0</div>
              <button class="_btn _column product-plus">&plus;</button>
            </div>
             
              
            <button class="_btn entypo-trash product-remove">Remove</button>
            <div class="price product-total-price">$0.00</div>
          </div>
        </li>
                 
            </div>
            </ol>  
  
                </li>
            </ul>
                   </section>  
        
        <!--Table head-->
     <!--   <thead>
            <tr>
                
                <th></th>
                <th>Size</th>
                <th>Price</th>
                <th>QTY</th>
                <th>Amount</th>
                <th></th>
            </tr>
        </thead>-->
         <!--  <tbody>
               <tr>
                   <td><h2>{{dish.name}}</h2> 
                   <p>{{dish.description}}</p></td>
                   <td>Medium</td>
                   <td>{{dish.price}}</td>
                     <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" class="form-control text-center" value="1">
                   </td>
                   <td>{{dish.price}}</td>
                    
                   
               </tr>
        </tbody>-->
                          

              
        <div class="panel-footer">
        <footer class="_grid cart-totals">
      <div class="_column subtotal" id="subtotalCtr">
        <div class="cart-totals-key">Subtotal</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column shipping" id="shippingCtr">
        <div class="cart-totals-key">Shipping</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column taxes" id="taxesCtr">
        <div class="cart-totals-key">Taxes (6%)</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column total" id="totalCtr">
        <div class="cart-totals-key">Total</div>
        <div class="cart-totals-value">$0.00</div>
      </div>
      <div class="_column checkout">
        <button class="_btn checkout-btn entypo-forward">Checkout</button>
      </div>
    </footer>
        </div>         
              
         
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
  
   


    <!-- Include all compiled plugins (below), or include individual files as needed -->

 
<script src="bower_components/angular/angular.min.js"></script>
<!-- <script src="scripts/app.js"></script>   -->

    <script>
        
        (function(){function c(a){this.t=a}function l(a,b){for(var e=b.split(".");e.length;){if(!(e[0]in a))return!1;a=a[e.shift()]}return a}function d(a,b){return a.replace(h,function(e,a,i,f,c,h,k,m){var f=l(b,f),j="",g;if(!f)return"!"==i?d(c,b):k?d(m,b):"";if(!i)return d(h,b);if("@"==i){e=b._key;a=b._val;for(g in f)f.hasOwnProperty(g)&&(b._key=g,b._val=f[g],j+=d(c,b));b._key=e;b._val=a;return j}}).replace(k,function(a,c,d){return(a=l(b,d))||0===a?"%"==c?(new Option(a)).innerHTML.replace(/"/g,"&quot;"):
a:""})}var h=/\{\{(([@!]?)(.+?))\}\}(([\s\S]+?)(\{\{:\1\}\}([\s\S]+?))?)\{\{\/\1\}\}/g,k=/\{\{([=%])(.+?)\}\}/g;c.prototype.render=function(a){return d(this.t,a)};window.t=c})();
// end of 't';

Number.prototype.to_$ = function () {
  return "$" + parseFloat( this ).toFixed(2);
};
String.prototype.strip$ = function () {
  return this.split("$")[1];
};
        

        var app = angular.module('Project1',[]);
        app.controller('menuController', function() {
            this.tab = 1;
            this.filtText = '';
             
            
  
            shipping: 0,
                products=[
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
                           description:'Made to order with any three fresh ingredients served with a flaky butter croissant. Ingredients: Vegetables - Spinach, Tomatoes, Mushrooms, Onions, Red Bell Peppers, Green Onions, Potato Galette Meats',
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
               

            this.products = products;
            
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
