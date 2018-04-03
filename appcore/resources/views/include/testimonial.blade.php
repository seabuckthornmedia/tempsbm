<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="pic">
                            <img src="images/img-1.jpg" alt="">
                        </div>
                        <h3 class="title">Lorem ipsum dolor</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non ante porttitor.</p>
                        <div class="testimonial-content">
                            <div class="testimonial-profile">
                                <h3 class="name">williamson</h3>
                                <span class="post">Web Developer</span>
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-half-empty"></li>
                            </ul>
                        </div>
                    </div>
     
                    <div class="testimonial">
                        <div class="pic">
                            <img src="images/img-2.jpg" alt="">
                        </div>
                        <h3 class="title">Lorem ipsum dolor</h3>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non ante porttitor.</p>
                        <div class="testimonial-content">
                            <div class="testimonial-profile">
                                <h3 class="name">Kristina</h3>
                                <span class="post">Web Designer</span>
                            </div>
                            <ul class="rating">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star-half-empty"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<script> 
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
</script>