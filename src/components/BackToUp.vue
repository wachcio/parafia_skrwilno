<template>
  <div v-scroll-to="{ 
        el: '#app',
        easing: 'ease',
        duration: 2000 }">
    <slot></slot>
  </div>
</template>

<script>
import Vue from "vue";
import VueScrollTo from "vue-scrollto";
Vue.use(VueScrollTo);
export default {
  name: "backToUp",
  components: {
    VueScrollTo
  }
};
</script>

<style lang="scss" scoped>
</style>