<template>
  <div>
    <nav>
      <img src="./../assets/Church.svg" alt>
      <h2 v-if="window.width<768">Parafia w Skrwilnie</h2>
      <h2 v-else>Parafia pw. św. Anny w Skrwilnie</h2>
      <div class="hamburger" @click="hamburgerClick()" v-if="window.width<768">
        <div class="bar1" :class="hamburgerChange"></div>
        <div class="bar2" :class="hamburgerChange"></div>
        <div class="bar3" :class="hamburgerChange"></div>
      </div>
      <div class="empty" v-else></div>
    </nav>

    <MenuMobile :menuIsVisible="menuIsVisible" v-if="window.width<window.minTablet"/>
    <MenuTablet v-if="window.width>window.minTablet"/>
  </div>
</template>

<script>
import MenuMobile from "./MenuMobile";
import MenuTablet from "./MenuTablet";
export default {
  name: "Navigation",
  props: { scrolled: Boolean, window: Object },
  data() {
    return { hamburgerChange: "", menuIsVisible: false };
  },
  components: { MenuMobile, MenuTablet },
  methods: {
    hamburgerClick() {
      this.$emit("setScroll", false);
      if (this.hamburgerChange == "") {
        this.hamburgerChange = "change";
        this.menuIsVisible = true;
      } else {
        this.hamburgerChange = "";
        this.menuIsVisible = false;
      }
      return this.hamburgerChange;
    }
  },
  computed: {},
  created() {},
  watch: {
    scrolled: function(val) {
      if (val == true) {
        this.hamburgerChange = "";
        this.menuIsVisible = false;
      }
    }
  }
};
</script>

<style lang="scss" scoped>
@import "./../css/common.scss";
nav {
  display: flex;
  // width: 100vw;
  flex-basis: 100%;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  text-align: center;
  padding: 15px;

  height: 75px;
  background-color: $bgcBlack;

  & h2 {
    // width: 100%;
    text-align: center;
    display: inline-block;
  }

  & .empty {
    width: 56px;
    height: 56px;
    background-color: transparent;
    font-size: 1em;
  }
  & .hamburger {
    width: 35px;
    font-size: 1em;
    margin-right: 0.5em;

    & .bar1,
    & .bar2,
    & .bar3 {
      width: 35px;
      height: 5px;
      // background-color: #333;
      margin: 6px 0;
      -webkit-transition: 0.4s;
      transition: 0.4s;
      color: $yellow;
      background-color: $yellow;
    }

    & .bar1.change {
      width: 35px;
      transform: rotate(-45deg) translate(-9px, 6px);
    }

    & .bar2.change {
      width: 35px;
      opacity: 0;
    }

    & .bar3.change {
      width: 35px;
      transform: rotate(45deg) translate(-8px, -8px);
    }
  }
}
</style>