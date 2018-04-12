@media only screen and (max-width: 868px) {

    .carousel {
      -webkit-transform:scaleY(0.9);
      -moz-transform:scaleY(0.9);
      -ms-transform:scaleY(0.9);
      transform:scaleY(0.9);
    }
  }
  @media only screen and (max-width: 768px) {
  
    .carousel {
      -webkit-transform:scaleY(0.8);
      -moz-transform:scaleY(0.8);
      -ms-transform:scaleY(0.8);
      transform:scaleY(0.8);
    }
  }
  @media only screen and (max-width: 668px) {
  
    .carousel {
      -webkit-transform:scaleY(0.75);
      -moz-transform:scaleY(0.75);
      -ms-transform:scaleY(0.75);
      transform:scaleY(0.75);
    }
  }
  @media only screen and (max-width: 568px) {
  
    .carousel {
      -webkit-transform:scaleY(0.7);
      -moz-transform:scaleY(0.7);
      -ms-transform:scaleY(0.7);
      transform:scaleY(0.7);
    }
  }
  @media only screen and (max-width: 468px) {
  
    .carousel {
      -webkit-transform:scaleY(0.45);
      -moz-transform:scaleY(0.45);
      -ms-transform:scaleY(0.45);
      transform:scaleY(0.45);
    }
  }
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
   
  .testimonial{
      padding-top: 70px;
      margin: 50px 15px 0;
      border: 1px solid #fff;
      text-align: center;
      position: relative;
      transition: all 0.7s ease 0s;
  }
  .testimonial:hover{ border-color: #e7e3e3; }
  .testimonial .pic{
      width: 95px;
      height: 95px;
      border-radius: 50%;
      background: #fff;
      padding: 7px;
      position:absolute;
      top: -50px;
      left: 50%;
      overflow: hidden;
      transform: translateX(-50%);
      transition: all 0.7s ease 0s;
  }
  .testimonial:hover .pic{ background: #1d3033; }
  .testimonial .pic img{
      width: 100%;
      height: auto;
      border-radius: 50%;
  }
  .testimonial .title{
      font-size: 16px;
      font-weight: 700;
      color: #eabd44;
      text-transform: uppercase;
      margin: 0 0 10px 0;
  }
  .testimonial .description{
      font-size: 15px;
      color: #999;
      line-height: 25px;
      border-bottom: 1px solid #f7f7f7;
      padding: 0 25px 35px;
      margin: 0;
  }
  .testimonial .testimonial-content{
      padding: 15px 25px 12px;
      border: 1px solid #f7f7f7;
      border-top: none;
      position: relative;
      text-align: left;
      transition: all 500ms ease 0s;
  }
  .testimonial:hover .testimonial-content{ border-color: #1d3033; }
  .testimonial .testimonial-content:after{
      content: "";
      width: 100%;
      height: 0;
      background: #1d3033;
      position: absolute;
      bottom: 0;
      left: 0;
      z-index: -1;
      transition: all 0.7s ease 0s;
  }
  .testimonial:hover .testimonial-content:after{ height: 100%; }
  .testimonial-content .testimonial-profile{ display: inline-block; }
  .testimonial .name{
      font-size: 16px;
      font-weight: 700;
      color: #3d3d3d;
      text-transform: uppercase;
      margin: 0 0 3px;
      transition: all 700ms ease 0s;
  }
  .testimonial:hover .name{ color: #fff; }
  .testimonial .post{
      font-size: 14px;
      color: #eabd44;
      text-transform: capitalize;
  }
  .testimonial .rating{
      display: inline-block;
      padding: 1px 5px;
      margin: 0;
      list-style: none;
      background: #eabd44;
      position: absolute;
      right: 25px;
  }
  .testimonial .rating li{
      display: inline-block;
      font-size: 14px;
      color: #fff;
  }
  .owl-theme .owl-controls{
      width: 100%;
      position: absolute;
      top: 50%;
  }
  .owl-theme .owl-controls .owl-buttons div{
      width: 45px;
      height: 40px;
      line-height: 37px;
      border-radius: 3px;
      background: #fff;
      border: 1px solid #ececec;
      padding: 0;
      opacity: 1;
      transition: all 0.4s ease-in-out 0s;
  }
  .owl-theme .owl-controls .owl-buttons div:hover{
      background: #eabd44;
      border-color: #eabd44;
  }
  .owl-prev,
  .owl-next{
      position: absolute;
      left: -3%;
  }
  .owl-next{
      left: auto;
      right: -3%;
  }
  .owl-prev:before,
  .owl-next:before{
      content: "\f104";
      font-family: "fontAwesome";
      font-size: 25px;
      color: #ececec;
  }
  .owl-next:before{ content: "\f105"; }
  @media only screen and (max-width: 990px){
      .owl-theme .owl-controls,
      .owl-prev,
      .owl-next{
          position: relative;
          left: 0;
          right: 0;
      }
  }
  @media only screen and (max-width: 768px){
      .testimonial .testimonial-content{
          padding: 15px 10px 12px;
      }
      .testimonial .rating{
          right: 12px;
      }
  }
  
  
  
  
  
  
  
   
    
    
    
    <div id="values" class="container"><br>
    
      <div class="row" style="">
      <div class="col-md-12">    
          <img src="{{ asset('images/backlit.jpg') }}" class="img-responsive" style="float:left; width:400px;" alt="Image">
      <div  style="float:left; margin-left:35px; width:400px; margin-right:20px;">
      <h1>Designing and Implementing!</h1><br>
      <p class="lead">Below you can find the technologies we work in whether designing from scratch or not.</p><br>
      <p>Please note this list is not exhaustive and only includes some of the most common options.</p>
      <p>Talk to us if you'd like to deploy software not included below, we'll do our best!</p>
      <a class="btn btn-primary" href="#scratch" role="button">More software &raquo;</a>
      </div>
      </div>
      </div>
      <br><br>
      <hr>
      <br><br>
    </div>
    <br>
   
    </div>
    <br>
    <br>
    <hr>
    <br>
    <br>

    <br>
    <hr>
    <br><br>
    <div id="values" class="row">
    <div class="col-md-12">
    <div>
    <br>
    <br>
    <img src="{{ asset('images/plant.jpg') }}" class="img-responsive" style="float:left; width:350px;" alt="Image">
    </div>
    <div  style="float:right; width:400px;text-align:left;">
    <h1>Our Responsibility</h1><br>
    <p>We believe poor design is responsible for the great damage inflicted upon the natural capital on which all life depends on, including ours and that of our children.</p>
    <p>At Sea Buckthorn Media, this sense of responsibility is reflected on our actions as we extend our passion for design onto the world by designing efficiently our decisions.</p>
    <p>This is also why we love to support local community groups and keep all our websites powered by renewables.</p><br>
    <p>
    <a class="btn btn-primary" href="#pricing" role="button">More &raquo;</a>
    </p>
    </div>
    </div>
    </div><br>
    <br><hr>
    
                    
                  
                  
                 