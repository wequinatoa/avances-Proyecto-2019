<template>
  <header class="masthead bg-primary text-white text-center">
    <h2>Ejercitate Durante 4 minutos</h2>
    <br>
    <br>
    <progress-button
      name="duration"
      class="btn btn-primary btn-lg"
      :duration="240 * 1000"
      @click="start"
      v-on:click="isHidden = !isHidden"
    >Empezar</progress-button>
    <br>
    <br>
    <h2>
      <countdown :auto-start="false" :time="240 * 1000" ref="countdown">
        <template slot-scope="props">
          Tiempo: {{ props.totalSeconds }} Segundos
          <br>
          <br>
          <template v-if=" props.totalSeconds == '00'">
            Lo Lograste
            <br>
            <br>
            <router-link to="/MenuRetos" tag="button" class="btn btn-primary btn-sm">Encuentra Un Nuevo Reto</router-link>
          </template>
        </template>
      </countdown>
    </h2>
    <br>
    <!-- <router-link
      v-if="!isHidden"
      to="/Intentalo"
      tag="button"
      class="btn btn-primary btn-sm"
    >Cancelar</router-link> -->
  </header>
</template>

<script>
//import Intentalo from "./Intentalo.vue";

export default {
  //components: {
  //  Intentalo
  //},
  data() {
    return {
      counting: false,
      isHidden: false
    };
  },

  methods: {
    countdown: function() {
      this.counting = true;
    },
    countdownend: function() {
      this.counting = false;
    },
    start() {
      this.$refs.countdown.start();
    },
    ocultar() {
      this.isHidden = true;
    }
  }
};
</script>

