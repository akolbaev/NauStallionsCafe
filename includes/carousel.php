<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- SLIDE SHOW -->
<div class="container">
    <div class="row row-content">
           <div class="col-xs-12">
                 <div id="mycarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                </ol>
                         <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive"
                         src="images/uthappizza.png" alt="Uthappizza">
                        <div class="carousel-caption">
                        <h2>Stallions Breakfast  <span class="label label-danger">Hot</span> <span class="badge">$8.99</span></h2>
                        <p>Your Custom Breakfast.</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                        </div>
                    </div>
                    <div class="item">
                        ...
                        <div class="carousel-caption">
                        <h2>Weekend Grand Buffet <span class="label label-danger label-xs">New</span></h2>
                         ...
                        </div>
                    </div>
                    <div class="item">
                        ...
                        <div class="carousel-caption">
                         ...
                        </div>
                    </div>
                </div>

            </div>
                   <!-- Controls -->
                <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="btn-group" id="carouselButtons">
                    <button class="btn btn-danger btn-sm" id="carousel-pause">
                	    <span class="fa fa-pause" aria-hidden="true"></span>
                    </button>
                    <button class="btn btn-danger btn-sm" id="carousel-play">
                	    <span class="fa fa-play" aria-hidden="true"></span>
                    </button>
                </div>

            </div>
       </div>
    
    </div>
           

</body>
</html>