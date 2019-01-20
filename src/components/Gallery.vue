<template>
  <div class="wrapper"></div>
</template>

<script>
export default {
  name: "Gallery",
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
@import "./../css/common.scss";
.wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  padding-bottom: 2em;

  height: calc(100vh - 75px);

  @include background(
    "./../assets/adult-black-and-white-body-of-christ-161081.jpg",
    50%,
    20%
  );
}
h1,
p {
  color: white;
  text-align: center;
  font-size: 1.5em;
}
</style>