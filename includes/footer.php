    <!-- FOOTER
    ================================================== -->
    <div class="container">
      <hr class="featurette-divider">
      <p class="pull-right"><a href="#home">Back to top<i class="fa fa-chevron-up" style="margin-left: 1rem"></i></a></p>
    </div>
    <section class="footer">
      <div class="container">
        <div class="row">

          <section class="col-lg-3"> <!-- Footer1 -->
            <h3 class="header-underline">Site Map</h3>
            <ul>
              <li class=""><a href="http://<? echo $_SERVER["HTTP_HOST"];?>/home">Home</a></li>
              <li class=""><a href="http://<? echo $_SERVER["HTTP_HOST"];?>/menu">Menu</a></li>
              <li class=""><a href="http://<? echo $_SERVER["HTTP_HOST"];?>/about">About Ichikawa</a></li>
              <li class=""><a href="http://<? echo $_SERVER["HTTP_HOST"];?>/contact">Contact &amp; Info</a></li>
            </ul>
          </section><!-- Footer1 -->

          <section class="col-lg-3"> <!--Footer2 -->
            <h3 class="header-underline">Our Hours</h3>
              <ul>
                <li><strong><h4>Lunch</h4></strong></li>
                <li><strong>Monday-Friday:</strong> 11:30am to 2:30pm</li>
                <li><strong>Saturday-Sunday:</strong> 12:00pm to 2:30pm</li><br>
                <li><strong><h4>Dinner</h4></strong></li>
                <li><strong>Monday-Thursday:</strong> 5:00pm to 9:00pm</li>
                <li><strong>Friday:</strong> 5:00pm to 10:00pm</li>
                <li><strong>Saturday:</strong> 2:30pm to 10:00pm</li>
                <li><strong>Sunday:</strong> 2:30pm to 9:00pm</li>
              </ul>            
          </section><!-- Footer2 -->

          <section class="col-lg-3"> <!-- Footer3 -->
            <h3 class="header-underline">Address</h3>
            <p>Ichikawa Fusion Shabu &amp; Sushi<br>
            4665 Chino Hills Pkwy, Chino Hills, CA 91709</p>
            <p><a href="tel:909-606-0080">(909) 606-0080</a></p>
          </section><!-- Footer3 -->

          <section class="col-lg-3 center"> <!-- Footer4 -->
            <h3 class="header-underline">Social Media</h3>
              <a href="http://www.yelp.com/biz/ichikawa-shabu-fondue-and-sushi-chino-hills" target="_blank"><img class="img-rounded" src="img/yelp.png" alt="Yelp" width="180px" height="180px"></a>
          </section><!-- Footer4 -->

        </div>      
      </div>
    </section>
    <!--Copyright-->
    <div class="container toes">
        <p>&copy; <?php echo date("Y")?> Ichikawa Shabu.</p>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth.js"></script>
    <script>
      $("#ichikawa-video").prop("volume", 0.3);
      $('.startVideo').click(function () {
        $("#ichikawa-video")[0].play();
      });   
      $('.closeModal').click(function () {
        $("#ichikawa-video")[0].pause();
      });
    </script>
  </body>
</html>