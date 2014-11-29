<script src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- Google Maps
    ================================================== -->
    <div class="visible-lg-block">
    <style>
      #map_canvas {
        width: auto;
        height: 400px; 
        margin-top: 80px;
      }
    </style>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map_canvas');;
        var mapOptions = {
          center: new google.maps.LatLng(33.982087, -117.702348), 
          zoom: 18,
          scrollwheel: false,
        }
        var pinColor = "FE7569";
        var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
        new google.maps.Size(21, 34),
        new google.maps.Point(0,0),
        new google.maps.Point(10, 34));
        var pinShadow = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
        new google.maps.Size(40, 37),
        new google.maps.Point(0, 0),
        new google.maps.Point(12, 35));
        var map = new google.maps.Map(mapCanvas, mapOptions)
        var marker = new google.maps.Marker({
                position: new google.maps.LatLng(33.982087, -117.702348), 
                map: map,
                icon: pinImage,
                shadow: pinShadow
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="map_canvas"></div>
    </div>

    <!-- Content
    ================================================== -->
    <div class="container">   
      <div class="row">
        <!-- Restaurant Info -->
        <div class="col-md-6">
            <div><h2>Our Address</h2></div>
              <ul class="list-unstyled">
                  <li><a href="https://www.google.com/maps/place/Ichi+Kawa/@33.9817661,-117.7023749,17z/data=!4m7!1m4!3m3!1s0x80dccd3b4a66067f:0xff160a6060411839!2s4665+Chino+Hills+Pkwy,+Chino+Hills,+CA+91709!3b1!3m1!1s0x0000000000000000:0x78bb4af4ca93c348" target="_blank">
                    <strong>Ichikawa Fusion Shabu &amp; Sushi</strong></a></li>
                  <li><a href="https://www.google.com/maps/place/Ichi+Kawa/@33.9817661,-117.7023749,17z/data=!4m7!1m4!3m3!1s0x80dccd3b4a66067f:0xff160a6060411839!2s4665+Chino+Hills+Pkwy,+Chino+Hills,+CA+91709!3b1!3m1!1s0x0000000000000000:0x78bb4af4ca93c348" target="_blank">
                        4665 Chino Hills Pkwy, Chino Hills, CA 91709</a></li>
                  <li><a href="tel:909-606-0080">(909) 606-0080</a></li>
              </ul>
			<div><a href="https://www.google.com/maps/dir/Current+Location/4665+Chino+Hills+Pkwy+Chino+Hills,+CA+91709" target="_blank">Get Directions</a></div>

            <div><h2>Hours of Operation</h2></div>
              <ul class="list-unstyled">
                <li><strong><h4>Lunch</h4></strong></li>
                <li><strong>Monday-Friday:</strong> 11:30am to 2:30pm</li>
                <li><strong>Saturday-Sunday:</strong> 12:00pm to 2:30pm</li><br>
                <li><strong><h4>Dinner</h4></strong><li>
                <li><strong>Monday-Thursday:</strong> 5:00pm to 9:00pm</li>
                <li><strong>Friday:</strong> 5:00pm to 10:00pm</li>
                <li><strong>Saturday:</strong> 2:30pm to 10:00pm</li>
                <li><strong>Sunday:</strong> 2:30pm to 9:00pm</li><br>
              </ul>
            <div><h2>Employment Opportunities</h2></div>
                <ul class="list-unstyled">
                    <li>If you are interested in being a part of Ichikawa, we offer many career opportunities. Please click the button below to download our employment form!</li><br>
                        <p><a class="btn btn-lg btn-primary text-center" href="ichikawa_form.pdf" target="_blank" role="button">Employment Form</a></p>
        </div>

        <div class="col-md-6">
            <h2>Business info</h2>
            <table class="table table-hover table-condensed">
              <tbody>
                <tr>
                    <td>Takes Reservations</td> 
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Payments Accepted</td> 
                    <td>Cash, Visa, MasterCard and American Express</td>
                </tr>
                <tr>
                    <td>Alcohol</td> 
                    <td>Beer &amp; Wine</td>
                </tr>				
                <tr>
                    <td>Take-out</td> 
                    <td>Yes</td>
                </tr>				
                <tr>
                    <td>Good For</td> 
                    <td>Lunch and Dinner</td>
                </tr>
                <tr>
                    <td>Parking</td> 
                    <td>Free Parking on Private Lot</td>
                </tr>
                <tr>
                    <td>Bike Parking</td> 
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Good for Kids</td> 
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Good for Groups</td> 
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Attire</td> 
                    <td>Casual</td>
                </tr>
                <tr>
                    <td>Ambience</td> 
                    <td>Casual</td>
                </tr>
                <tr>
                    <td>Noise Level</td> 
                    <td>Average</td>
                </tr>
                <tr>
                    <td>Outdoor Seating</td> 
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Has TV</td> 
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Waiter Service</td> 
                    <td>Yes</td>
                </tr>
                <tr>
                    <td>Delivery</td> 
                    <td>No</td>
                </tr>				
                <tr>
                    <td>Caters</td> 
                    <td>No</td>
                </tr>
              </tbody>              
            </table>            
        </div>
      </div>
    </div>
