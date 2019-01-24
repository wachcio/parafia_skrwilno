<template>
  <div class="menuWrapper">
    <div class="menu">
      <ul>
        <li
          class="item"
          v-for="(menuItem, index) in menuItems"
          :key="index"
          v-scroll-to="{ 
        el: menuItem.link,
        easing: [.6, .80, .30, 1.9],
        duration: 2000 }"
        >
          <a>{{menuItem.text}}</a>
        </li>
      </ul>
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
  flex-wrap: wrap;
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
}
ul {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  margin: 0;
  padding: 0;
  display: flex;
  background-color: $bgcBlack;
  transition: 0.5s all ease-in;
  cursor: pointer;
}
ul li {
  list-style: none;
  margin: 0 1em;
  transition: 0.5s all ease-in;
}
ul li a {
  display: block;
  position: relative;
  text-decoration: none;
  padding: 5px;
  color: $yellow;
  text-transform: uppercase;
}

ul:hover li a {
  transform: scale(1.2);
  opacity: 0.2;
  filter: blur(5px);
  transition: 0.5s;
}
ul li a:hover {
  transform: scale(1.5);
  opacity: 1;
  filter: blur(0);
}
</style>

