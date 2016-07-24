<? global $wf; ?>

<div class="map">
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>
  <div id="map-canvas"></div>

  <script type="text/javascript">
    var lat = <?= $wf->site->contact_details->map->lat(); ?>;
    var lng = <?= $wf->site->contact_details->map->lng(); ?>;

    var map;
      function initialise() {
        var myOptions = {
            zoom: 14,
            center: new google.maps.LatLng(lat, lng),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };
        map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(lat, lng)
        });
    }
    google.maps.event.addDomListener(window, "load", initialise);
  </script>
</div>
