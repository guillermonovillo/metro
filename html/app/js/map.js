var i,
    iteration = 1,
    customMarker = null,
    map,
    newMarker,
    markers = Array(),
    scrolls = Array();

$(document).ready(function(){

  /*
   * open close locations sidebar
   */
  $('#sidebar .btn-handle').click(function(e){
    e.preventDefault();
    $self = $(this);
    if ( $self.hasClass('open') ) {
      $('#sidebar').removeClass('close');
    } else {
      $('#sidebar').addClass('close');
    }
  });

  /*
   * select locations filter
   */
  $('#sidebar .filters a').click(function(e){
    e.preventDefault();
    $self = $(this);
    $self.closest('ul').hide();
    $('#locations-lists').show();
    $('.location-list-wrapper').removeClass('active');
    $('.location-list-wrapper.' + $self.attr('data-target')).addClass('active');
    displayMarkers($self.attr('data-target'));
    setTimeout(function () {
      $('.location-list-wrapper.' + $self.attr('data-target')).find('.location-list-scroll').jScrollPane();
      $('.location-list-wrapper.' + $self.attr('data-target')).find('.list > li:first-child a').click();
    }, 100);
    //var myScroll = new iScroll($('.location-list-wrapper.' + $self.attr('data-target')), { scrollbarClass: 'myScrollbar' });
  });

  /*
   * close locations filter
   */
  $('#locations-lists .close, #sidebar h1').click(function (e) {
    e.preventDefault();
    $self = $(this);
    $('#locations-lists').hide();
    $('.location-list-wrapper').removeClass('active');
    $('#sidebar .filters').show();
    $('.infoBox > img').click();
    displayMarkers('');
  });

  /*
   * create custom scroll instances
   */
  $('.location-list-scroll').each(function (i, item) {
    $item = $(item);
    
  });

  /*
   * select location from list
   */
  $('#locations-lists .list a').click(function (e) {

    e.preventDefault();
    $self = $(this);
    type = $self.closest('.location-list-wrapper').attr('data-type');
    iteration = $self.attr('data-iteration');

    $(markers).each(function (i, item) {

      if ( item.category == type && item.iteration == iteration && updateMapCenter ) {
        map.panTo(new google.maps.LatLng(item.position.lat(), item.position.lng()));
        google.maps.event.trigger(item, 'click');
        return false;
      }

    });

    updateMapCenter = true;

  });

  var styles = [
    {
      "stylers": [
        { "visibility": "on" },
        { "gamma": 0.97 },
        { "saturation": -83 },
        { "lightness": 8 },
        { "hue": "#ffbb00" }
      ]
    }, {
      "featureType": "poi.park",
      "stylers": [
        { "visibility": "on" },
        { "saturation": 45 },
        { "hue": "#ccff00" },
        { "lightness": -8 }
      ]
    }, {
      "featureType": "road.arterial",
      "elementType": "geometry.fill",
      "stylers": [
        { "visibility": "on" },
        { "saturation": 22 },
        { "lightness": 54 }
      ]
    }, {
      "featureType": "water",
      "stylers": [
        { "hue": "#00e5ff" },
        { "saturation": 20 },
        { "lightness": 38 }
      ]
    }, {

    }
  ];

  var mapOptions = {
    zoom: 15,
    styles: styles,
    center: new google.maps.LatLng(39.951489, -75.16494),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var image = new google.maps.MarkerImage(
    stylesheet_directory + '/images/location/marker.png',
    new google.maps.Size(49,51),
    new google.maps.Point(0,0),
    new google.maps.Point(16,44)
  );
   
  var marker = new google.maps.Marker({
    icon: image,
    position: new google.maps.LatLng(39.951489, -75.16494),
    map: map
  });
  
  /*
   * create locations markers
   */
  $('#locations-lists .list').each(function (i, list) {
    iteration = 1;

    $(list).find('a').each(function (c, item) {

      $item = $(item);
      title = $item.text();
      type = $item.closest('.location-list-wrapper').attr('data-type');
      address = $item.attr('data-address');
      coords = $item.attr('data-coords').split(',');
      iteration = $item.attr('data-iteration');

      latLng = new google.maps.LatLng(coords[0], coords[1]);

      newMarker = new MarkerWithLabel({
        position: latLng,
        draggable: false,
        icon: {
          url: null
        },
        map: map,
        labelContent: c < 9 ? '0' + (c + 1) : c + 1,
        labelAnchor: new google.maps.Point(9, 32),
        labelClass: 'marker-label ' + type,
        labelStyle: { opacity: 1.0 },
        labelInBackground: false
      });
      newMarker.iteration = iteration;
      newMarker.category = type;
      newMarker.setVisible(false);

      var boxText = '<div><div class="infobox-content"><h2>' + title + '</h2><p>' + address + '</p></div><div class="infobox-tick"></div></div>'

      var myOptions = {
        content: boxText,
        disableAutoPan: true,
        maxWidth: 0,
        pixelOffset: new google.maps.Size(-76, -105),
        zIndex: null,
        boxStyle: {
          width: '172px'
        },
        closeBoxURL: stylesheet_directory + "/images/location/infobox_close.jpg",
        infoBoxClearance: new google.maps.Size(1, 1),
        isHidden: false,
        pane: "floatPane",
        enableEventPropagation: false
      };

      markers.push(newMarker);
      var ib = new InfoBox(myOptions);
      ib.close(map, newMarker);

      google.maps.event.addListener(newMarker, 'click', function() {
        $(".infoBox").hide();
        ib.open(map, this);
      });

    });
  
  });
  
  var updateMapCenter = false;
  // $('#sidebar-content .filters li:first-child a').click();

});

function displayMarkers(filter) {

  for ( i = 0 ; i < markers.length ; i++ ) {

    if ( markers[i].category === filter ) {
      markers[i].setVisible(true);
    } else {
      markers[i].setVisible(false);
    }

  }

}