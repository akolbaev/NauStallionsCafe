<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<!-- Active page-->
        <div class="row">
            <div class="col-xs-12">
               <ul class="breadcrumb">
                   <li><a href="index.html">Home</a></li>
                   <li class="active">Menu</li>
               </ul>
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

</body>
</html>