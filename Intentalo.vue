<template>
  <header class="masthead bg-primary text-white text-center">
    <h2>
        No Lo Lograste!!
      Intentalo de Nuevo
    </h2>
    <br>
    <br>
    <router-link to="/" tag="button" class="btn btn-primary btn-lg">Regresar</router-link>
  </header>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>


