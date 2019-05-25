<template>
  <header class="masthead bg-primary text-white text-center">
    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <router-link to="/AbdominalesMenu" tag="button" class="btn btn-primary btn-lg">Abdominales</router-link>
      </div>
    </div>

    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <router-link to="/CaminarMenu" tag="button" class="btn btn-primary btn-lg">Caminar</router-link>
      </div>
    </div>

    <div class="boton">
      <div class="container">
        <!-- contenedor boton -->
        <router-link to="/FlexionesMenu" tag="button" class="btn btn-primary btn-lg">Flexiones</router-link>
      </div>
    </div>

    <router-view></router-view>
  </header>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
