
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
    '/images/locations/metropolis-pin.png',
    new google.maps.Size(82,104),
    new google.maps.Point(0,0),
    new google.maps.Point(41,101)
  );
   
  var marker = new google.maps.Marker({
    icon: image,
    position: new google.maps.LatLng(34.048066, -118.267096),
    map: map
  });


var getCen = map.getCenter();

google.maps.event.addDomListener(window, 'resize', function() {
map.setCenter(getCen);
});





$('.mapData').each(function (i, list) {
    var iteration;
    $type = $(this).data('type');
    $color = $(this).data('color');

    $(list).find('a').each(function (c, item) {

      $item = $(item);
      title = $item.text();
      type = $type;
      address = $item.attr('data-address');
      coords = $item.attr('data-coords').split(',');
      iteration = $item.attr('data-iteration');
      latLng = new google.maps.LatLng(coords[0], coords[1]);
      icon = '/images/locations/infobox-'+type+'.png';

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

      var boxText = '<div class="infobox-icontype"><img src='+ icon +' /></div>  <div><div class="infobox-content"><img src="/images/locations/infobox-tick.png" style="margin-top:-25px"/><h2>' + title + '</h2><p>' + address + '</p></div></div>'
      var myOptions = {
        content: boxText,
        disableAutoPan: false,
        maxWidth: 0,
        pixelOffset: new google.maps.Size(-100, -110),
        zIndex: 0,
        boxStyle: {
          // width: '120px', height:'120px'
        },
        closeBoxURL: "/images/ui/close.png",
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

  });




// $(document).ready(function(){

//   /*
//    * open close locations sidebar
//    */
//   $('#sidebar .btn-handle').click(function(e){
//     e.preventDefault();
//     $self = $(this);
//     if ( $self.hasClass('open') ) {
//       $('#sidebar').removeClass('close');
//     } else {
//       $('#sidebar').addClass('close');
//     }
//   });

//   /*
//    * select locations filter
//    */
//   $('#sidebar .filters a').click(function(e){
//     e.preventDefault();
//     $self = $(this);
//     $self.closest('ul').hide();
//     $('#locations-lists').show();
//     $('.location-list-wrapper').removeClass('active');
//     $('.location-list-wrapper.' + $self.attr('data-target')).addClass('active');
//     displayMarkers($self.attr('data-target'));
//     setTimeout(function () {
//       $('.location-list-wrapper.' + $self.attr('data-target')).find('.location-list-scroll').jScrollPane();
//       $('.location-list-wrapper.' + $self.attr('data-target')).find('.list > li:first-child a').click();
//     }, 100);
//   });

//   /*
//    * close locations filter
//    */
//   $('#locations-lists .close, #sidebar h1').click(function (e) {
//     e.preventDefault();
//     $self = $(this);
//     $('#locations-lists').hide();
//     $('.location-list-wrapper').removeClass('active');
//     $('#sidebar .filters').show();
//     $('.infoBox > img').click();
//     displayMarkers('');
//   });




  
//   /*
//    * create locations markers
//    */

//   $('#locations-lists .list').each(function (i, list) {
//     iteration = 1;

//     $(list).find('a').each(function (c, item) {

//       $item = $(item);
//       title = $item.text();
//       type = $item.closest('.location-list-wrapper').attr('data-type');
//       address = $item.attr('data-address');
//       coords = $item.attr('data-coords').split(',');
//       iteration = $item.attr('data-iteration');

//       latLng = new google.maps.LatLng(coords[0], coords[1]);

//       newMarker = new MarkerWithLabel({
//         position: latLng,
//         draggable: false,
//         icon: {
//           url: null
//         },
//         map: map,
//         labelContent: c < 9 ? '0' + (c + 1) : c + 1,
//         labelAnchor: new google.maps.Point(9, 32),
//         labelClass: 'marker-label ' + type,
//         labelStyle: { opacity: 1.0 },
//         labelInBackground: false
//       });
//       newMarker.iteration = iteration;
//       newMarker.category = type;
//       newMarker.setVisible(false);

//       var boxText = '<div><div class="infobox-content"><h2>' + title + '</h2><p>' + address + '</p></div><div class="infobox-tick"></div></div>'

//       var myOptions = {
//         content: boxText,
//         disableAutoPan: true,
//         maxWidth: 0,
//         pixelOffset: new google.maps.Size(-76, -105),
//         zIndex: null,
//         boxStyle: {
//           width: '172px'
//         },
//         closeBoxURL: stylesheet_directory + "/images/location/infobox_close.jpg",
//         infoBoxClearance: new google.maps.Size(1, 1),
//         isHidden: false,
//         pane: "floatPane",
//         enableEventPropagation: false
//       };

//       markers.push(newMarker);
//       var ib = new InfoBox(myOptions);
//       ib.close(map, newMarker);

//       google.maps.event.addListener(newMarker, 'click', function() {
//         $(".infoBox").hide();
//         ib.open(map, this);
//       });

//     });
  
//   });
  
//   var updateMapCenter = false;
//   // $('#sidebar-content .filters li:first-child a').click();

// });

// function displayMarkers(filter) {

//   for ( i = 0 ; i < markers.length ; i++ ) {

//     if ( markers[i].category === filter ) {
//       markers[i].setVisible(true);
//     } else {
//       markers[i].setVisible(false);
//     }

//   }

// }