<template>
  <div class="wrapper">
    <p>Niedziele i święta:
      <br>8:30, 10:00, 11:30 , 14:00 kaplica, 16:00
      <br>
      <br>Dni powszednie:
      <br>7:30, 17:00 czas zimowy, 18:00 czas letni
    </p>
  </div>
</template>

<script>
export default {
  name: "HolyMasses",
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

  @include sectionHeigth(70vh, 85vh);

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