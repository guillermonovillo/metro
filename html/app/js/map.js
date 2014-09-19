
  var i,
    iteration = 1,
    customMarker = null,
    map,
    newMarker,
    markers = Array(),
    scrolls = Array();

  function initialize() {
        var isDraggable = $(document).width() > 480 ? true : false; 
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(34.052751, -118.258978), 
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          mapTypeControl: true,
          mapTypeControlOptions: {
              style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
              position: google.maps.ControlPosition.BOTTOM_LEFT
          },
          panControl: true,
          panControlOptions: {
              position: google.maps.ControlPosition.TOP_RIGHT
          },
          zoomControl: true,
          zoomControlOptions: {
              style: google.maps.ZoomControlStyle.LARGE,
              position: google.maps.ControlPosition.RIGHT_CENTER
          },
          scrollwheel: false,
          draggable: isDraggable,
          styles: [
                {
                  "featureType": "road.highway",
                  "elementType": "labels.icon",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "poi",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "transit",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "administrative.neighborhood",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "landscape",
                  "stylers": [
                    { "color": "#ffffff" }
                  ]
                },{
                  "featureType": "road.arterial",
                  "elementType": "geometry.stroke",
                  "stylers": [
                    { "color": "#808080" },
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "road.local",
                  "elementType": "geometry.fill",
                  "stylers": [
                    { "color": "#b69a64" }
                  ]
                },{
                  "featureType": "road.arterial",
                  "elementType": "geometry.stroke",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "road.arterial",
                  "elementType": "geometry.fill",
                  "stylers": [
                    { "color": "#b69a64" }
                  ]
                },{
                  "featureType": "road.local",
                  "elementType": "labels",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "road.arterial",
                  "elementType": "labels.text.stroke",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "road.arterial",
                  "elementType": "labels.text.stroke",
                  "stylers": [
                    { "visibility": "on" }
                  ]
                },{
                  "featureType": "road.highway",
                  "elementType": "geometry.stroke",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "road.highway.controlled_access",
                  "elementType": "geometry.fill",
                  "stylers": [
                    { "color": "#77e7d6" }
                  ]
                },{
                  "featureType": "road.highway",
                  "elementType": "geometry",
                  "stylers": [
                    { "color": "#b69a64" }
                  ]
                },{
                  "featureType": "road.highway",
                  "elementType": "labels.text.stroke",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "road.highway",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    { "color": "#ffffff" }
                  ]
                },{
                  "featureType": "road.highway",
                  "elementType": "labels.text.stroke",
                  "stylers": [
                    { "color": "#84714c" },
                    { "visibility": "on" }
                  ]
                },{
                  "featureType": "road.highway",
                  "elementType": "geometry.fill",
                  "stylers": [
                    { "color": "#CCCCCC" }
                  ]
                },{
                  "featureType": "road.arterial",
                  "elementType": "geometry.fill",
                  "stylers": [
                    { "color": "#CCCCCC" },
                    { "visibility": "on" }
                  ]
                },{
                  "featureType": "road.local",
                  "elementType": "geometry.fill",
                  "stylers": [
                    { "color": "#cccccc" }
                  ]
                },{
                  "featureType": "road.highway",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    { "color": "#241f21" }
                  ]
                },{
                  "featureType": "road.highway",
                  "elementType": "labels.text.stroke",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                },{
                  "featureType": "water",
                  "elementType": "geometry.fill",
                  "stylers": [
                    { "color": "#77e7d6" }
                  ]
                },{
                  "featureType": "water",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    { "color": "#241f21" }
                  ]
                },{
                  "featureType": "road",
                  "elementType": "labels.icon",
                  "stylers": [
                    { "visibility": "off" }
                  ]
                }
              ],
          }
        var map = new google.maps.Map(map_canvas, map_options);
        var infoWindow = new google.maps.InfoWindow();


  var image = new google.maps.MarkerImage(
    'images/locations/metropolis-pin.png',
    new google.maps.Size(82,104),
    new google.maps.Point(0,0),
    new google.maps.Point(41,101)
  );
   
  var marker = new google.maps.Marker({
    icon: image,
    position: new google.maps.LatLng(34.048066, -118.267096),
    map: map
  });

    var boxText = '<div><div class="infobox-content"><h2 style="color:white">Metropolis</h2><p>888 S Figueroa Street</p></div></div>';
      var myOptions2 = {
        content: boxText,
        boxClass: "infoBox metropolis",
        disableAutoPan: false,
        maxWidth: 0,
        // pixelOffset: new google.maps.Size(-100, -110),
        zIndex: 0,
        boxStyle: {},
        closeBoxURL: "images/ui/close.png",
        closeBoxMargin: "5px -10px",
        infoBoxClearance: new google.maps.Size(1, 1),
        isHidden: false,
        pane: "floatPane",
        enableEventPropagation: false
      };

      var ib = new InfoBox(myOptions2);
      ib.close(map, marker);

      google.maps.event.addListener(marker, 'click', function() {
        $(".infoBox").hide();
        ib.open(map, this);
      });

// Center on resize 
var getCen = map.getCenter();
google.maps.event.addDomListener(window, 'resize', function() {
map.setCenter(getCen);
});





$('.mapData').each(function (i, list) {
    var iteration;
    $color = $(this).data('color');

    $(list).find('a').each(function (c, item) {

      $item = $(item);
      title = $item.text();
      var title = title.split(" — ");
      $type = $(this).data('type');
      type = $type;
      address = $item.attr('data-address');
      coords = $item.attr('data-coords').split(',');
      iteration = $item.attr('data-iteration');
      latLng = new google.maps.LatLng(coords[0], coords[1]);
      icon = 'images/locations/infobox-'+type+'.png';

      newMarker = new MarkerWithLabel({
        position: latLng,
        draggable: false,
        icon: {
          path: 'M26.264,7.561c-8.254,0-14.722,6.271-14.722,14.286c0,3.179,1.079,6.121,2.898,8.496L26.26,45.88l11.799-15.51c1.833-2.385,2.918-5.33,2.918-8.523C40.977,13.966,34.375,7.561,26.264,7.561',
          fillColor: '#'+$color,
          fillOpacity: 1,
          scale: 1,
          strokeWeight: 0
        },
        map: map,
        labelContent: iteration < 10 ? '0' + (iteration) : iteration,
        labelAnchor: new google.maps.Point(-20, -10),
        labelClass: 'labels',
        labelStyle: { opacity: 1.0 },
        labelInBackground: false
      });
      newMarker.iteration = iteration;
      newMarker.category = type;
      newMarker.setVisible(false);

      var boxText = '<div class="infobox-icontype"><img src='+ icon +' /></div><div><div class="infobox-content"><h2>' + title[1] + '</h2><p>' + address + '</p></div></div>'
      var myOptions = {
        content: boxText,
        boxClass: "infoBox "+type,
        disableAutoPan: false,
        maxWidth: 0,
        pixelOffset: new google.maps.Size(-100, -110),
        zIndex: 0,
        boxStyle: {
          // width: '120px', height:'120px'
          border:0
        },
        closeBoxURL: "images/ui/close.png",
        closeBoxMargin: "5px -10px",
        infoBoxClearance: new google.maps.Size(1, 1),
        isHidden: false,
        pane: "floatPane",
        enableEventPropagation: false
      };

      markers.push(newMarker);
      var ib = new InfoBox(myOptions);
      ib.close(map, newMarker);

      for ( i = 0 ; i < markers.length ; i++ ) {
          markers[i].setVisible(true);
      }



      google.maps.event.addListener(newMarker, 'click', function() {
        $(".infoBox").hide();
        ib.open(map, this);
      });



    });
  
  });




      }

      if($("#map_canvas").length) {
          google.maps.event.addDomListener(window, 'load', initialize);
      }
    


  $('.mapData li a').click(function (e) {

    e.preventDefault();
    $self = $(this);
    type = $self.parent().attr('data-type');
    iteration = $self.attr('data-iteration');

    $(markers).each(function (i, item) {

      if ( item.iteration == iteration ) {
        // map.panTo(new google.maps.LatLng(item.position.lat(), item.position.lng()));
        google.maps.event.trigger(item, 'click');
        return false;
      }

    });

    updateMapCenter = true;

var offset = $("#map_canvas").offset();
    $('html,body').animate({
          scrollTop: offset.top - 80
        }, 1000);

  });