let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 26.859906795631524, lng: 75.75600533926277 },
    zoom: 8,
  });
}