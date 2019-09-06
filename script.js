// NEW RELEASES CAROUSEL

window.onload = function () {  
    var mySwiper = new Swiper ('.swiper-container', {
      direction: 'horizontal',
      loop: true,
      slidesPerView: 2.2,
      centeredSlides: true,
      spaceBetween: 40,
      navigation: {
        nextEl: '.next',
        prevEl: '.previous',
      },
      breakpoints: {
        950: {
          slidesPerView: 1.5,
          spaceBetween: 20
        },
        700: {
          slidesPerView: 1.3,
          spaceBetween: 20
        },
        
      }
    })

    // MOBILE MENU OPEN/CLOSE

    var mobileMenu = document.querySelector(".mobile-menu");
    var menuButton = document.querySelector(".menu-button");
    var closeButton = document.querySelector(".menu-close");
    menuButton.addEventListener("click", () =>{
        mobileMenu.classList.add("show-menu");
    })
    closeButton.addEventListener("click", () =>{
        mobileMenu.classList.remove("show-menu");
    })



  };



// // GOOGLE MAP

// function initMap() {

// var map = new google.maps.Map(document.getElementById('map'), {
//     center: {lat: 38.970566, lng: -94.704446},
//     zoom: 15,
//     disableDefaultUI: true,
    // styles: [
    // {
    //     "elementType": "geometry",
    //     "stylers": [
    //     {
    //         "color": "#f5f5f5"
    //     }
    //     ]
    // },
    // {
    //     "elementType": "labels.icon",
    //     "stylers": [
    //     {
    //         "visibility": "off"
    //     }
    //     ]
    // },
    // {
    //     "elementType": "labels.text.fill",
    //     "stylers": [
    //     {
    //         "color": "#616161"
    //     }
    //     ]
    // },
    // {
    //     "elementType": "labels.text.stroke",
    //     "stylers": [
    //     {
    //         "color": "#f5f5f5"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "administrative",
    //     "elementType": "geometry",
    //     "stylers": [
    //     {
    //         "visibility": "off"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "administrative.land_parcel",
    //     "elementType": "labels",
    //     "stylers": [
    //     {
    //         "visibility": "off"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "administrative.land_parcel",
    //     "elementType": "labels.text.fill",
    //     "stylers": [
    //     {
    //         "color": "#bdbdbd"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "administrative.locality",
    //     "elementType": "labels.text.fill",
    //     "stylers": [
    //     {
    //         "color": "#68c242"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "administrative.neighborhood",
    //     "elementType": "labels.text.fill",
    //     "stylers": [
    //     {
    //         "color": "#68c242"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "poi",
    //     "stylers": [
    //     {
    //         "visibility": "off"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "poi",
    //     "elementType": "geometry",
    //     "stylers": [
    //     {
    //         "color": "#eeeeee"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "poi",
    //     "elementType": "labels.text",
    //     "stylers": [
    //     {
    //         "color": "#68c242"
    //     },
    //     {
    //         "visibility": "off"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "poi",
    //     "elementType": "labels.text.fill",
    //     "stylers": [
    //     {
    //         "color": "#757575"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "poi.park",
    //     "elementType": "geometry",
    //     "stylers": [
    //     {
    //         "color": "#e5e5e5"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "poi.park",
    //     "elementType": "geometry.fill",
    //     "stylers": [
    //     {
    //         "color": "#68c242"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "poi.park",
    //     "elementType": "labels.text.fill",
    //     "stylers": [
    //     {
    //         "color": "#9e9e9e"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "road",
    //     "elementType": "geometry",
    //     "stylers": [
    //     {
    //         "color": "#ffffff"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "road",
    //     "elementType": "labels.icon",
    //     "stylers": [
    //     {
    //         "visibility": "off"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "road.arterial",
    //     "elementType": "labels.text.fill",
    //     "stylers": [
    //     {
    //         "color": "#a6a6a6"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "road.highway",
    //     "elementType": "geometry",
    //     "stylers": [
    //     {
    //         "color": "#dadada"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "road.highway",
    //     "elementType": "labels.text.fill",
    //     "stylers": [
    //     {
    //         "color": "#b6b6b6"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "road.local",
    //     "elementType": "labels",
    //     "stylers": [
    //     {
    //         "visibility": "off"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "road.local",
    //     "elementType": "labels.text.fill",
    //     "stylers": [
    //     {
    //         "color": "#b6b6b6"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "transit",
    //     "stylers": [
    //     {
    //         "visibility": "off"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "transit.line",
    //     "elementType": "geometry",
    //     "stylers": [
    //     {
    //         "color": "#e5e5e5"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "transit.station",
    //     "elementType": "geometry",
    //     "stylers": [
    //     {
    //         "color": "#eeeeee"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "water",
    //     "elementType": "geometry",
    //     "stylers": [
    //     {
    //         "color": "#c9c9c9"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "water",
    //     "elementType": "geometry.fill",
    //     "stylers": [
    //     {
    //         "color": "#001d5d"
    //     }
    //     ]
    // },
    // {
    //     "featureType": "water",
    //     "elementType": "labels.text.fill",
    //     "stylers": [
    //     {
    //         "color": "#9e9e9e"
    //     }
    //     ]
    // }
    // ]
// });
// var pin = './assets/icons/location_pin.svg';
// var marker = new google.maps.Marker({
//     position: {lat: 38.970566, lng: -94.704446},
//     title:"Snyder Recordings",
//     icon:pin
// });

// // To add the marker to the map, call setMap();
// marker.setMap(map);
// }

