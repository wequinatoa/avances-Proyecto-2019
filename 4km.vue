<template>
  <header class="masthead bg-primary text-white text-center">
    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <button type="button" class="btn btn-primary btn-lg">Empezar</button>
        <!-- <router-link to="/Mapa" tag="button" class="btn btn-primary btn-lg">Empezar</router-link> -->
      </div>
    </div>
    <br>
    <br>
    <div class="container">
      <div class="col-xs-4">
        <a href="/#/Mapa" title>
          <img src="img/map.png" class="img-circle" aalt width="10%">
        </a>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
