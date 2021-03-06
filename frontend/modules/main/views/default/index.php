<div class="">


    <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

            <?
            foreach($result_general as $row):
            ?>
            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="bg-img" style="background-image: url('<?=\frontend\components\Common::getImageAdvert($row)[0] ?>')")"></div>
                <h2><a href="#"><?=\frontend\components\Common::getTitleAdvert($row) ?></a></h2>
                <blockquote>
                    <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?=$row['address'] ?></p>
                    <p><?=\frontend\components\Common::substr($row['description']) ?></p>
                    <cite>$ <?=$row['price'] ?></cite>
                </blockquote>
            </div>
            </div>

        <?
        endforeach;
        ?>

    </div><!-- /sl-slider -->



    <nav id="nav-dots" class="nav-dots">
        <?
        if($count_general >= 1):
            ?>
            <span class="nav-dot-current"></span>
        <?
        endif;
        ?>

        <?
        if($count_general > 1):
            foreach(range(2,$count_general) as $line):
                ?>
                <span></span>
            <?
            endforeach;
        endif;
        ?>
    </nav>

</div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3>Buy, Sale & Rent</h3>
        <div class="searchbar">
            <div class="row">
                <? echo \yii\helpers\Html::beginForm() ?>
                <div class="col-lg-6 col-sm-6">
                    <? echo \yii\helpers\Html::textInput('search', '', ['class' => 'form-control', 'placeholder' => 'Search of Properties']) ?>
                    <div class="row">
                        <div class="col-lg-3 col-sm-3 ">

                            <?
                               echo \yii\helpers\Html::dropDownList('buy','', [
                                   'Rent' => 'Rent',
                                   'Sale' => 'Sale',

                               ], ['class' => 'form-control', 'prompt' => 'Buy']
                               );
                            ?>
                        </div>
                        <div class="col-lg-3 col-sm-4">

                            <?
                            echo \yii\helpers\Html::dropDownList('buy','', [
                                '$150,000 - $200,000' => '$150,000 - $200,000',
                                '$200,000 - $250,000' => '$200,000 - $250,000',
                                '$250,000 - $300,000' => '$250,000 - $300,000',
                                '$300,000 - above' => '$300,000 - above',

                            ], ['class' => 'form-control', 'prompt' => 'Price']
                            );
                            ?>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <?
                            echo \yii\helpers\Html::dropDownList('buy','', [
                                'Apartment' => 'Apartment',
                                'Building' => 'Building',
                                'Office Space' => 'Office Space',

                            ], ['class' => 'form-control', 'prompt' => 'Property']
                            );
                            ?>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                             <? echo \yii\helpers\Html::submitButton('Find Now', ['class' => 'btn btn-success']) ?>
                        </div>

                        <? echo \yii\helpers\Html::endForm() ?>
                    </div>


                </div>
                <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                    <p>Join now and get updated with all the properties deals.</p>
                    <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div>
            </div>
        </div>
    </div>
</div>
<!-- banner -->
<div class="container">
    <div class="properties-listing spacer"> <a href="buysalerent.html"  class="pull-right viewall">View All Listing</a>
        <h2>Featured Properties</h2>
        <div id="owl-example" class="owl-carousel">
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/1.jpg"  class="img-responsive" alt="properties"/>
                    <div class="status sold">Sold</div>
                </div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/2.jpg"  class="img-responsive" alt="properties"/>
                    <div class="status new">New</div>
                </div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/3.jpg"  class="img-responsive" alt="properties"/></div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/4.jpg"  class="img-responsive" alt="properties"/></div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/1.jpg"  class="img-responsive" alt="properties"/>
                    <div class="status sold">Sold</div>
                </div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/2.jpg"  class="img-responsive" alt="properties"/>
                    <div class="status sold">Sold</div>
                </div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/3.jpg"  class="img-responsive" alt="properties"/>
                    <div class="status new">New</div>
                </div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/4.jpg"  class="img-responsive" alt="properties"/></div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/1.jpg"  class="img-responsive" alt="properties"/></div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/2.jpg"  class="img-responsive" alt="properties"/></div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>
            <div class="properties">
                <div class="image-holder"><img src="/images/properties/3.jpg"  class="img-responsive" alt="properties"/></div>
                <h4><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Royal Inn</a></h4>
                <p class="price">Price: $234,900</p>
                <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
                <a class="btn btn-primary" href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >View Details</a>
            </div>

        </div>
    </div>
    <div class="spacer">
        <div class="row">
            <div class="col-lg-6 col-sm-9 recent-view">
                <h3>About Us</h3>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.html" >Learn More</a></p>

            </div>
            <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
                <h3>Recommended Properties</h3>
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-lg-4"><img src="/images/properties/1.jpg"  class="img-responsive" alt="properties"/></div>
                                <div class="col-lg-8">
                                    <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Integer sed porta quam</a></h5>
                                    <p class="price">$300,000</p>
                                    <a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27"  class="more">More Detail</a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4"><img src="/images/properties/2.jpg"  class="img-responsive" alt="properties"/></div>
                                <div class="col-lg-8">
                                    <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Integer sed porta quam</a></h5>
                                    <p class="price">$300,000</p>
                                    <a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27"  class="more">More Detail</a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4"><img src="/images/properties/3.jpg"  class="img-responsive" alt="properties"/></div>
                                <div class="col-lg-8">
                                    <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Integer sed porta quam</a></h5>
                                    <p class="price">$300,000</p>
                                    <a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27"  class="more">More Detail</a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-4"><img src="/images/properties/4.jpg"  class="img-responsive" alt="properties"/></div>
                                <div class="col-lg-8">
                                    <h5><a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27" >Integer sed porta quam</a></h5>
                                    <p class="price">$300,000</p>
                                    <a href="javascript:if(confirm(%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Pro\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://thebootstrapthemes.com/live/thebootstrapthemes-realestate/property-detail.php%27"  class="more">More Detail</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>