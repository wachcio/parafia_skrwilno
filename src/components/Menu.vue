<template>
  <AnimateCSS enter="bounceInRightIn" leave="bounceInRightOut" appear="appear">
    <div class="menuWrapper" v-show="menuIsVisible">
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
  </AnimateCSS>
</template>

<script>
import Vue from "vue";
import AnimateCSS from "./AnimateCSS";
import VueScrollTo from "vue-scrollto";
Vue.use(VueScrollTo);
export default {
  name: "",
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
  components: { AnimateCSS },
  methods: {},
  computed: {},
  created() {},
  watch: {}
};
</script>

<style lang="scss" scoped>
@import "./../css/common.scss";

.menuWrapper {
  position: fixed;
  right: 0;
  top: 70px;
  z-index: 1000;
  font-size: 1.1em;
  background-color: $bgcBlack;
  & .item {
    border-bottom: 1px solid $yellow;
    padding: 0.6em;
    @media (orientation: landscape) {
      padding: 0.3em;
    }
    transition: background-color 0.3s ease-in-out;
    &:hover {
      color: $bgcBlack;
      background-color: $yellow;
      cursor: pointer;
    }
    &:last-child {
      border-bottom: 0;
    }
  }
}
</style>

