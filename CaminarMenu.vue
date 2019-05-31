<template>
  <header class="masthead bg-primary text-white text-center">
    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <!-- <button type="button" class="btn btn-primary btn-lg" >Entrena</button>   -->
        <router-link to="/2km" tag="button" class="btn btn-primary btn-lg">Camina 2KM</router-link>
      </div>
    </div>

    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <!-- <button type="button" class="btn btn-primary btn-lg" >Retos</button> -->
        <router-link to="/4km" tag="button" class="btn btn-primary btn-lg">Camina 4KM</router-link>
      </div>
    </div>

    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <!-- <button type="button" class="btn btn-primary btn-lg" >Retos</button> -->
        <router-link to="/8km" tag="button" class="btn btn-primary btn-lg">Camina 8KM</router-link>
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
