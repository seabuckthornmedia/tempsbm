    <!-- Scripts -->





<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
 <script>
     window.sr = ScrollReveal();
     sr.reveal('.d-flex', {
       duration: 2000,
       origin:'right'
     });
     sr.reveal('.jumbotron', {
       duration: 2000,
       origin:'left',
       distance:'300px'
     });
     
     sr.reveal('.col-md-4', {
       duration: 2000,
       origin:'right',
       distance:'300px'
     });
     sr.reveal('.btn-primary', {
       duration: 2000,
       delay: 1500,
       origin:'right'
     });
     sr.reveal('btn-secondary', {
       duration: 2000,
       origin:'left'
     });
     sr.reveal('card-body', {
       duration: 2000,
       origin:'bottom',
       distance:'300px',
       viewFactor: 0.2
     });
     sr.reveal('.card', {
       duration: 2000,
       origin:'right',
       distance:'300px',
       viewFactor: 0.2
     });
     sr.reveal('.pricing-header', {
       duration: 2000,
       origin:'left',
       distance:'300px',
       viewFactor: 0.2
     });
 </script>
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