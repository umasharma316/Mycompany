
<?php $thisPage="products"?>
@extends('layouts.master')
@section('title', 'about')
<!DOCTYPE html>
<html lang="en">
  <body>    
    <div id="breadcrumb">
        <div class="container"> 
            <div class="breadcrumb">                            
                <li><a href="Home">Home</a></li>
                <li>Products</li>          
            </div>      
        </div>  
    </div>
    




    <section id="portfolio1">    
        <div class="container">
            <div class="center">
               <p>Here are the various products associated to textile packing in our company.</p>
            </div>

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Grey Boards</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Plastic Materials</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Paper Tubes</a></li>
                <li><a class="btn btn-default" data-filter=".others">Others</a></li>       
            </ul><!--/#portfolio-filter-->
        </div>
        <!-- <div class="container">
            <div class="">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div>

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>        
                    </div>

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>           
                    </div>
          
                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item6.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div>

                    <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item7.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div>

                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/item8.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Business theme</a></h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <a class="preview" href="images/portfolio/full/item8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container">
                <div class="portfolio-items bootstrap">
                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap"  align="text-center">
                            <img class="img-responsive" src="images/portfolio/recent/image1.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Bubble Wrap</h3>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image2.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>BOPP Tapes</h3>
                                </div> 
                            </div>
                        </div>          
                    </div>

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image20.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Printed BOPP Tapes</h3>
                                </div> 
                            </div>
                        </div>          
                    </div>

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image3.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Plastic Bags</h3>
                                </div> 
                            </div>
                        </div>        
                    </div>
          
                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image5.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner" data-filter=".plastic">
                                    <h3>Brown BOPP Tapes</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image10.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Paper Tubes</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image21.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Paper Tubes</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image22.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Paper Tubes</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>


                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image11.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>LD Bags</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image12.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Printed LD Bags</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image13.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Bubble Wraps</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item others col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image14.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Gunny Bags</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image15.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>BOPP Bags</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item others col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image16.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Suthli</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image17.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Grey Boards</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image18.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Grey Boards</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image19.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>Grey Boards</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>

                    <div class="portfolio-item html col-xs-12 col-sm-4 col-md-3" data-filter="plastic">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/recent/image23.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3>HDPE Rolls</h3>
                                </div> 
                            </div>
                        </div>      
                    </div>
                </div>
        </div>
    </section><!--/#portfolio-item-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
    <script src="js/wow.min.js"></script>
    <script src="js/functions.js"></script>
    
</body>
</html>