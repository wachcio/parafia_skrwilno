<template>
  <div class="menuWrapper">
    <div class="menu">
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
  </div>
</template>

<script>
import Vue from "vue";
import VueScrollTo from "vue-scrollto";
import MenuItems from "./MenuItems.json";
Vue.use(VueScrollTo);
export default {
  name: "MenuTablet",
  props: {
    menuIsVisible: Boolean
  },
  data() {
    return {
      menuItems: MenuItems
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
  justify-content: center;

  position: absolute;

  top: 70px;
  z-index: 999;
  font-size: 1.1em;
  background-color: $bgcBlack;
  left: 0;
  width: 100vw;
  padding: 0.4em 0.9em;
  & .menu {
    display: flex;
    align-items: stretch;
    justify-content: center;
    z-index: 1000;
    font-size: 1.1em;
    background-color: $bgcBlack;
    // position: relative;
    // top: 50%;
    // left: 50%;
    // transform: translate(-50%, -50%);
    & .item {
      display: flex;
      align-items: center;
      justify-content: center;
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
}
</style>

