<template>
  <div class="menuWrapper">
    <div
      class="item"
      v-for="(menuItem, index) in menuItems"
      :key="index"
      v-scroll-to="{ 
        el: menuItem.link,
        easing: [.6, .80, .30, 1.9],
        duration: 2000 }"
    >{{menuItem.text}}</div>
  </div>
</template>

<script>
import Vue from "vue";
import VueScrollTo from "vue-scrollto";
Vue.use(VueScrollTo);
export default {
  name: "MenuTablet",
  props: {
    menuIsVisible: Boolean
  },
  data() {
    return {
      menuItems: [
        { text: "Słowo Boże", link: "#wordOfGod" },
        { text: "Aktualności", link: "#news" },
        { text: "Nasz parafia", link: "#ourChurch" },
        { text: "Msze święte", link: "#holyMasses" },
        { text: "Duchowni", link: "#clergy" },
        { text: "Galeria", link: "#gallery" },
        { text: "Rys historyczny", link: "#history" },
        { text: "Kontakt", link: "#contact" }
      ]
    };
  },
  components: {},
  methods: {},
  computed: {},
  created() {},
  watch: {}
};
</script>

<style lang="scss" scoped>
@import "./../css/common.scss";

.menuWrapper {
  display: flex;
  align-items: center;
  justify-content: space-around;

  position: absolute;

  top: 70px;
  z-index: 1000;
  font-size: 1.1em;
  background-color: $bgcBlack;
  left: 0;
  width: 100vw;
  padding: 0.4em 0.9em;

  & .item {
    // border: 1px solid $yellow;
    padding: 0.4em;
    // position: relative;
    // top: 50%;
    // left: 50%;
    // transform: translate(-50%, -50%);
    text-align: center;

    transition: background-color 0.3s ease-in-out;
    &:hover {
      color: $bgcBlack;
      background-color: $yellow;
      cursor: pointer;
    }
  }
}
</style>

