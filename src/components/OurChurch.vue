<template>
  <div class="wrapper">
    <p>Parafia św. Anny w Skrwilnie
      <br>PROBOSZCZ PARAFII -
      <br>ul. Kościelna 35,
      <br>87-510 Skrwilno
      <br>woj. kujawsko-pomorskie
      <br>KANCELARIA PARAFIALNA:
    </p>
  </div>
</template>

<script>
export default {
  name: "OurChurch",
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

  @include background("./../assets/antique-bible-blur-268424.jpg", 50%, 25%);
}
h1,
p {
  color: white;
  text-align: center;
  font-size: 1.5em;
}
</style>