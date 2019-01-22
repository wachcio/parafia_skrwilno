<template>
  <div class="wrapper">
    <h1>św. Anna</h1>
    <p>dowiedz się więcej o naszym patronie...</p>
  </div>
</template>

<script>
export default {
  name: "Patron",
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
  justify-content: flex-end;
  width: 100%;
  padding-bottom: 2em;
  position: relative;
  top: 0;

  min-height: calc(100vh - 75px);

  @include background("./../assets/anna_matka_mb.jpg", 50%, 25%);
}
h1,
p {
  color: white;
}
</style>