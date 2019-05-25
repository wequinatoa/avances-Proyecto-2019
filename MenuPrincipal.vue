<template>
  <header class="masthead bg-primary text-white text-center">
    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <!-- <button type="button" class="btn btn-primary btn-lg" >Entrena</button>   -->
        <router-link to="/" tag="button" class="btn btn-primary btn-lg">Entrena</router-link>
      </div>
    </div>

    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <!-- <button type="button" class="btn btn-primary btn-lg" >Retos</button> -->
        <router-link to="/MenuRetos" tag="button" class="btn btn-primary btn-lg">Retos</router-link>
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
