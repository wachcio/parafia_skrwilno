<template>
  <div class="h1Wrapper">
    <h1>
      <slot></slot>
    </h1>
    <BackToUp class="backToUp">
      <i class="icon icon-upward"></i>
    </BackToUp>
  </div>
</template>

<script>
import BackToUp from "./BackToUp";
export default {
  name: "MainTitle",
  props: {},
  data() {
    return {};
  },
  components: { BackToUp },
  methods: {},
  computed: {},
  created() {},
  watch: {}
};
</script>

<style lang="scss" scoped>
.h1Wrapper {
  display: flex;
  justify-content: center;
  align-items: center;

  & h1 {
    margin: 0;
    padding: 0;
    // @include buttonGradient();
    // width: 100%;
    // text-align: center;
  }

  & .backToUp {
    font-size: 1.2em;
    margin-left: 1em;
    cursor: pointer;
  }
}
</style>