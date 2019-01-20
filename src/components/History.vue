<template>
  <div class="wrapper">
    <p>
      Kościół świętej Anny – rzymskokatolicki kościół parafialny należący do dekanatu Rypin diecezji płockiej.
      Obecny kościół został wzniesiony na początku XIX wieku i reprezentuje styl późnoklasycystyczny. Jest to trzecia z kolei budowla stojąca na tym miejscu. Wnętrze świątyni to prawdziwe bogactwo zabytków sztuki sakralnej. Do wyposażenia kościoła należy Droga Krzyżowa składająca się z 14 dużych płaskorzeźb, znajdujących w pięknych ramach oraz witraże i freski.
      Świątynia jest murowana i wybudowana z cegły. W latach 1888-1994 została rozbudowana według projektu architekta Gocławskiego. Wyposażenie świątyni reprezentuje styl neogotycki.
    </p>
  </div>
</template>

<script>
export default {
  name: "History",
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

  @include background("./../assets/blur-burn-burning-278779.jpg", 50%, 20%);
}
h1,
p {
  color: white;
  text-align: center;
  font-size: 1em;
}
</style>