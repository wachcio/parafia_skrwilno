<template>
  <div class="menuWrapper">
    <AnimateCSS enter="bounceInRightIn" leave="bounceInRightOut" appear="appear">
      <div class="menu" v-show="menuIsVisible">
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
  </div>
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
        { text: "Słowo Boże na dziś", link: "#wordOfGod" },
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
.menuWrapper {
  position: fixed;
  float: right;
  //   margin: 0;
  //   padding: 0;
  top: 75px;
  right: 0;

  //   transform: translate(-100%, 0);
  //   transition: 0.3s all ease-in-out;
}
.menu {
  //   position: fixed;
  //   float: right;
  //   right: 0;
  //   top: 75px;
  font-size: 1.5em;
  //   padding: 15px;
  //   transform: translateX(103%);

  background-color: #222;
  & .item {
    border-bottom: 1px solid #f3bc3f;
    // margin: 15px;
    padding: 15px;
    transition: all 0.3s ease-in-out;
    &:hover {
      color: #222;
      background-color: #f3bc3f;
      cursor: pointer;
      //   &::before {
      //     content: ">";
      //   }
    }
  }
}
</style>

