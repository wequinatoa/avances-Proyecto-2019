<template>
  <div>
    <div>
      <button class="geolocation" v-on:click="geolocate()">Add</button>
    </div>
    <gmap-map
      :center="{lat:currentLocation.lat, lng:currentLocation.lng}"
      :zoom="12"
      style="width:100%;  height: 400px;"
    >
      <gmap-marker
        :position="{lat:currentLocation.lat, lng:currentLocation.lng}"
        :animation="2"
        ref="markers"
      ></gmap-marker>
    </gmap-map>
  </div>
</template>

<script>
export default {
  name: "GoogleMap",
  data() {
    return {
      // default to Montreal to keep it simple
      // change this to whatever makes sense
      currentLocation: { lat: 0, lng: 0 },
      markers: [],
      places: [],
      currentPlace: null
    };
  },
  mounted: function() {
    this.geolocate();
    this.updatePosition();
  },
  methods: {
    // receives a place object via the autocomplete component
    setPlace(place) {
      this.currentPlace = place;
    },
    addMarker() {
      if (this.currentPlace) {
        const marker = {
          lat: this.currentPlace.geometry.location.lat(),
          lng: this.currentPlace.geometry.location.lng()
        };
        this.markers.push({ position: marker });
        this.places.push(this.currentPlace);
        this.center = marker;
        this.currentPlace = null;
      }
    },
    geolocate: function() {
      navigator.geolocation.getCurrentPosition(position => {
        this.currentLocation = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
      });
    },
    updatePosition() {
      (this.currentLocation.lat = this.$refs.markers.$markerObject.position.latitude),
        (this.currentLocation.lng = this.$refs.markers.$markerObject.position.longitude);
    }
  }
};
</script>