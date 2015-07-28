<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Something Special Lawncare</title>
  <link rel="stylesheet" type="text/css" href="assets/css/main.min.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/3rdparty/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/3rdparty/GammaGallery/css/style.min.css">
  <script src="assets/css/3rdparty/GammaGallery/js/modernizr.custom.70736.js"></script>
  <noscript><link rel="stylesheet" type="text/css" href="assets/css/3rdparty/GammaGallery/css/noJS.css"/></noscript>
</head>
<body>
  <div class="hero" id="landing" data-type="background" data-speed="10">
    <header class="header">
      <div class="branding">
        <a href="#landing">
          <span class="logo"><img src="assets/img/logo.png" alt="Something Special logo"></span>
          
          <h1>Something<br />Special</h1>
        </a>
      </div>
      
      <div>
        <p class="call-us">Call us at (540) 986-6731</p>
        
        <!-- nav menu -->
        <nav class="navmenu">
          <a href="#services">Services</a>
          <a href="#photos">Photos</a>
          <a href="#contact">Contact</a>
        </nav>
      </div>
    </header>
    
    <div class="blurb">
      <h2>We do <strong>something special</strong> to your lawn.</h2>
      
      <p>Something Special serves the landscaping needs of the Roanoke, VA area. We do mowing, pruning, snow removal, and more. See examples of our work in Photos or check out our Services.</p>
    </div>
  </div>
  
  <section class="services" id="services">
    <div class="servicesTextWrap">
      <h2>Services</h2>
      
      <p><strong>Landscape design, maintenance, snow removal -we can do it all.</strong></p>

      <table class="table">
        <thead>
          <tr>
            <th>Service</th>
            <th>Description</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Mowing</td>
            <td>...</td>
          </tr>
          <tr>
            <td>Snow Removal</td>
            <td>...</td>
          </tr>
          <tr>
            <td>Landscaping</td>
            <td>...</td>
          </tr>
        </tbody>
      </table>
      
      <!-- This should be moved somewhere else. It looks out of place.
      <section>
        <form>
          <label>Name*</label>
          <input type="text" placeholder="Name" />
          
          <label>Email*</label>
          <input type="text" placeholder="Email" />
          
          <label>Phone</label>
          <input type="text" placeholder="(123) 456-7890" />
          
          <textarea placeholder="Maybe we can add a contact form here"></textarea>
        </form>

        <button class="btn btn-default">Contact</button>
      </section>
      -->
    </div>
    
    <a href="#landing"><p class="backtotop">Back to top <i class="fa fa-arrow-up"></i></p></a>
  </section>
  
  <!-- Add this section back in when Matt has photos ready
  <section class="photos" id="photos">
    <h2>Photos</h2>
    
    <div class="gamma-container gamma-loading gallery" id="gamma-container">
      <ul class="gamma-gallery">
      </ul>
    
      <div class="gamma-overlay"></div>    
    </div>
    
    <a href="#landing"><p class="backtotop">Back to top <i class="fa fa-arrow-up"></i></p></a>
  </section>
  -->
  
  <section class="contact" id="contact">
    <div class="contact-item">
      <img src="/somethingspecial/assets/img/phone-icon.png" class="icon" />
      
      <div class="contact-right">
        <p>(540) 986-6731</p>
      </div>
    </div>
    
    <hr />
    
    <div class="contact-item">      
      <img src="/somethpingspecial/assets/img/mail-icon.png" class="icon" />
      
      <div class="contact-right">
        <p class="contact-right"><a href="mailto:mmcmahan225@gmail.com">mmcmahan225@gmail.com</a></p>
      </div>
    </div>
    
    <hr />
    
    <div class="contact-item">      
      <img src="/somethingspecial/assets/img/clock-icon.png" class="icon" />
      
      <div class="contact-right">
        <p>Hours</p>
        <p class="small">M-F 9:00-5:00</p>
      </div>
    </div>
    
    <hr />
    
    <div class="contact-item">
      <img src="/somethingspecial/assets/img/map-icon.png" class="icon" />
      
      <div class="contact-right">
        <p>2408 Westover Ave<br>
          Roanoke, VA 24015
        </p>
        
        <p class="small" style="text-decoration:underline;"><a href="https://goo.gl/maps/JRi6B" target="_blank">Map</a></p>
      </div>
    </div>
  </section>
  
  <footer>
    <a href="#services">Services</a>
    <a href="#photos">Photos</a>
    <a href="#contact">Contact</a>
  </footer>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="assets/css/3rdparty/GammaGallery/js/jquery.masonry.min.js"></script>
  <script src="assets/css/3rdparty/GammaGallery/js/jquery.history.js"></script>
  <script src="assets/css/3rdparty/GammaGallery/js/js-url.min.js"></script>
  <script src="assets/css/3rdparty/GammaGallery/js/jquerypp.custom.js"></script>
  <script src="assets/css/3rdparty/GammaGallery/js/gamma.js"></script>
  <script type="text/javascript">    
    $(function() {

      var GammaSettings = {
          // order is important!
          viewport : [ {
            width : 900,
            columns : 4
          }, {
            width : 500,
            columns : 3
          }, { 
            width : 320,
            columns : 2
          }, { 
            width : 0,
            columns : 2
          } ]
      };

      Gamma.init( GammaSettings );
    });
  </script>
</body>
</html>