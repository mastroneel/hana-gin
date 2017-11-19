

google.maps.event.addDomListener(window, 'load', function() {


  // var map;
  //
  // function initialize() {
  //     var myLatlng1 = new google.maps.LatLng(37.7749, -122.4194);
  //
  //     var mapOptions = {
  //         zoom: 12,
  //         center: myLatlng1,
  //         mapTypeId: google.maps.MapTypeId.ROADMAP
  //     };
  //     var map = new google.maps.Map(document.getElementById('map-canvas'),
  //     mapOptions);
  //
  //     if (navigator.geolocation) {
  //         navigator.geolocation.getCurrentPosition(function (position) {
  //             initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  //             map.setCenter(initialLocation);
  //         });
  //     }
  //
  //     var panelDiv = document.getElementById('panel');
  //
  //     var data = new MedicareDataSource;
  //
  //     var view = new storeLocator.View(map, data, {
  //       geolocation: false,
  //       features: data.getFeatures()
  //     });
  //
  //     new storeLocator.Panel(panelDiv, {
  //       view: view
  //     });
  // }
  // initialize();




  (function() {

      if(!!navigator.geolocation) {

          var map;

          var mapOptions = {
              zoom: 12,
              mapTypeId: google.maps.MapTypeId.ROADMAP
          };

          map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

          navigator.geolocation.getCurrentPosition(function(position) {

              var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

              // var infowindow = new google.maps.InfoWindow({
              //     map: map,
              //     position: geolocate,
              // });

              map.setCenter(geolocate);

          });

      } else {
        var map;

        var mapOptions = {
            center: new google.maps.LatLng(37.7749, -122.4194),
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      }

      var panelDiv = document.getElementById('panel');

      var data = new MedicareDataSource;

      var view = new storeLocator.View(map, data, {
        geolocation: false,
        features: data.getFeatures()
      });

      new storeLocator.Panel(panelDiv, {
        view: view
      });

  })();
















  // var map = new google.maps.Map(document.getElementById('map-canvas'), {
  //   center: new google.maps.LatLng(37.7749, -122.4194),
  //   zoom: 12,
  //   mapTypeId: google.maps.MapTypeId.ROADMAP
  // });

  // var panelDiv = document.getElementById('panel');
  //
  // var data = new MedicareDataSource;
  //
  // var view = new storeLocator.View(map, data, {
  //   geolocation: false,
  //   features: data.getFeatures()
  // });
  //
  // new storeLocator.Panel(panelDiv, {
  //   view: view
  // });
});
