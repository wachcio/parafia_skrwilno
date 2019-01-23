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
import VueScrollTo from "vue-scrollto";
Vue.use(VueScrollTo);
import AnimateCSS from "./AnimateCSS";
import MenuItems from "./MenuItems.json";
export default {
  name: "MenuMobile",
  props: {
    menuIsVisible: Boolean
  },
  data() {
    return {
      menuItems: MenuItems
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
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  right: 0;
  // top: 70px;
  z-index: 1000;
  font-size: 1.1em;
  background-color: $bgcBlack;
  @media (min-width: 768px) {
    left: 0;
    width: 100vw;
  }
  @media (orientation: landscape) {
    font-size: 1em;
  }

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

