<template>
  <div class="menuWrapper">
    <div class="menu_">
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
  padding-bottom: 0.5em;
  position: absolute;

  top: 75px;
  z-index: 1;
  font-size: 1.1em;
  background-color: $bgcBlack;
  left: 0;
  width: 100%;
  // margin: 0.4em 0.9em;
  .menu_ {
    margin: 0;
    padding: 0;
    top: 0;
    position: relative;
  }

  & ul {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    margin: 0;
    padding: 0;
    display: flex;
    background-color: $bgcBlack;
    transition: 0.2s all ease-in;
    cursor: pointer;

    &:hover li a {
      transform: scale(1.2);
      opacity: 0.2;
      filter: blur(5px);
      transition: 0.5s all ease-in;
    }

    & li {
      list-style: none;
      margin: 0 1em;
      transition: 0.5s all ease-in;

      & a {
        display: block;
        position: relative;
        text-decoration: none;
        padding: 5px;
        color: $yellow;
        text-transform: uppercase;
        transition: 0.5s;
        &:hover {
          transform: scale(1.3);
          opacity: 1;
          filter: blur(0);
          color: $bgcBlack;
        }
        &:before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: $yellow;
          transition: transform 0.5s;
          transform-origin: right;
          transform: scale(0);
          z-index: -1;
        }
        &:hover:before {
          transition: transform 0.5s;
          transform-origin: left;
          transform: scale(1);
          z-index: -1;
        }
      }
    }
  }
}
</style>

