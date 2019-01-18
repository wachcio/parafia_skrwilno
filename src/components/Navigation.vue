<template>
  <div>
    <nav>
      <img src="./../assets/Church.svg" alt>
      <h2>Parafia w Skrwilnie</h2>
      <div class="hamburger" @click="hamburgerClick()">
        <div class="bar1" :class="hamburgerChange"></div>
        <div class="bar2" :class="hamburgerChange"></div>
        <div class="bar3" :class="hamburgerChange"></div>
      </div>
    </nav>

    <Menu :menuIsVisible="menuIsVisible"/>
  </div>
</template>

<script>
import Menu from "./Menu";
export default {
  name: "Navigation",
  props: { scrolled: Boolean },
  data() {
    return { hamburgerChange: "", menuIsVisible: false };
  },
  components: { Menu },
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
  flex-direction: row;
  align-items: center;
  text-align: center;
  padding: 15px;

  height: 75px;
  background-color: $bgcBlack;

  & h2 {
    width: 100%;
  }
  & .hamburger {
    width: 35px;
    font-size: 1em;

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