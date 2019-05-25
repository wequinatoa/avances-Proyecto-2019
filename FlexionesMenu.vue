<template>
  <header class="masthead bg-primary text-white text-center">
    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <!-- <button type="button" class="btn btn-primary btn-lg" >Entrena</button>   -->
        <router-link to="/2min" tag="button" class="btn btn-primary btn-lg">Nivel Fácil</router-link>
      </div>
    </div>

    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <!-- <button type="button" class="btn btn-primary btn-lg" >Retos</button> -->
        <router-link to="/4min" tag="button" class="btn btn-primary btn-lg">Nivel Medio</router-link>
      </div>
    </div>

    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <!-- <button type="button" class="btn btn-primary btn-lg" >Retos</button> -->
        <router-link to="/8min" tag="button" class="btn btn-primary btn-lg">Nivel Intenso</router-link>
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
