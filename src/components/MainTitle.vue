<template>
  <div class="h1Wrapper">
    <h1>
      <slot></slot>
    </h1>
  </div>
</template>

<script>
export default {
  name: "MainTitle",
  props: {},
  data() {
    return {};
  },
  components: {},
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
}
</style>