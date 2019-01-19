<template>
  <div class="container">
    <div class="wrapper">
      <div class="title">{{news.title}}</div>
      <div class="newsText">
        {{news.text}}
        <div class="more">Więcej...</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "News",
  props: { news: Object },
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
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  //   padding: 0.3em 0;
  flex-direction: column;
  margin-bottom: 1em !important;
}
.wrapper {
  width: 95%;

  & .title {
    flex-basis: 95%;
    font-size: 1.2em;
    font-style: italic;
    font-weight: 700;
    padding: 0.3em 0;

    background-color: $bgcBlack;
    color: $yellow;
    text-align: center;
    border: 2px solid $bgcBlack;
    border-radius: 1em;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  & .newsText {
    display: flex;
    align-items: flex-end;
    flex-direction: column;
    text-align: justify;
    border: 2px solid $bgcBlack;
    border-bottom-left-radius: 1em;
    padding: 0.5em;

    & .more {
      flex-basis: 20%;
      text-align: justify;
      background-color: $bgcBlack;
      border: 2px solid $bgcBlack;
      border-radius: 1em;
      border-bottom-right-radius: 0;
      padding: 0.5em 1em;
      margin: 0.3em;
      font-size: 1.1em;
      font-style: italic;
      color: $yellow;
    }
  }
}
</style>