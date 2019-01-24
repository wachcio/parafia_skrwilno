<template>
  <div class="wrapper">
    <p>ks. Paweł Waruszewski - proboszcz
      <br>
      <br>Tomasz Albert Mączyński - wikariusz
    </p>
  </div>
</template>

<script>
export default {
  name: "Clergy",
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
  position: relative;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  padding-bottom: 2em;
  color: white;

  @include sectionHeigth(70vh, 85vh);

  // @include background(
  //   "./../assets/adult-black-and-white-ceremony-1451043.jpg",
  //   50%,
  //   25%
  // );
  &::after {
    content: "";
    @include background(
      "./../assets/adult-black-and-white-ceremony-1451043.jpg",
      50%,
      25%
    );
    opacity: 0.5;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    position: absolute;
    z-index: -1;
  }
}
h1,
p {
  // color: black;
  text-align: center;
  font-size: 1.5em;
}
</style>