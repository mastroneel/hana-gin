google.maps.event.addDomListener(window, 'load', function() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: new google.maps.LatLng(37.7749, -122.4194),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  // var myLatlng1 = new google.maps.LatLng(37.7749, -122.4194);
  //
  //    var mapOptions = {
  //        zoom: 12,
  //        center: myLatlng1,
  //        mapTypeId: google.maps.MapTypeId.ROADMAP
  //    };
  //    var map = new google.maps.Map(document.getElementById('map'),
  //    mapOptions);
  //
  // if (navigator.geolocation) {
  //        navigator.geolocation.getCurrentPosition(function (position) {
  //            initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  //            map.setCenter(initialLocation);
  //        });
  //    }
  //  }
  //
  //  initialize();


  //
  //
  //
  // function init() {
  //   	navigator.geolocation.getCurrentPosition(function(response) {
  //     var mapOptions = {
  //       center: new google.maps.LatLng(response.coords.latitude, response.coords.longitude),
  //       zoom: 10,
  //       mapTypeId: google.maps.MapTypeId.HYBRID
  //     }
  //
  //     var map = new google.maps.Map(document.getElementById("map"), mapOptions);
  //
  //     google.maps.event.addListener(map, 'click', function(event) {
  //
  //
  //      var myLatLng = event.latLng;
  //      var lat = myLatLng.lat();
  //      var lng = myLatLng.lng();
  //
  //       document.getElementById("lat").value = lat;
  //       document.getElementById("lang").value = lng;
  //
  // });
  //     });
  //   }










  var panelDiv = document.getElementById('panel');

  var data = new MedicareDataSource;

  var view = new storeLocator.View(map, data, {
    geolocation: false,
    features: data.getFeatures()
  });

  new storeLocator.Panel(panelDiv, {
    view: view
  });
});
