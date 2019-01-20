<template>
  <div class="wrapper">
    <vue-flux
      :options="fluxOptions"
      :images="fluxImages"
      :transitions="fluxTransitions"
      ref="slider"
    >
      <flux-controls slot="controls"></flux-controls>
      <flux-pagination slot="pagination"></flux-pagination>
    </vue-flux>
  </div>
</template>

<script>
import { VueFlux, FluxPagination, FluxControls, Transitions } from "vue-flux";
export default {
  name: "Gallery",
  props: {},
  data() {
    return {
      fluxOptions: {
        autoplay: true,
        height: "auto"
      },
      fluxImages: [
        "http://wachcio.pl/parafia_skrwilno/img/kosciol1.jpg",
        "http://wachcio.pl/parafia_skrwilno/img/kosciol2.jpg"
      ],
      fluxCaptions: ["", ""],
      fluxTransitions: {
        transitionRound2: Transitions.transitionRound2
      }
    };
  },
  components: { VueFlux, FluxPagination, FluxControls },
  methods: {},
  computed: {},
  created() {},
  watch: {}
};
</script>

<style lang="scss" scoped>
@import "./../css/common.scss";
.wrapper {
  // display: flex;
  // flex-direction: column;
  // align-items: center;
  // justify-content: center;
  width: 100%;
  padding-bottom: 2em;

  height: calc(100vh - 75px);

  // @include background(
  //   "./../assets/adult-black-and-white-body-of-christ-161081.jpg",
  //   50%,
  //   20%
  // );
}
h1,
p {
  color: white;
  text-align: center;
  font-size: 1.5em;
}
</style>