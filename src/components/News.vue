<template>
  <div class="container">
    <div class="wrapper">
      <div class="title">{{news.title}}</div>
      <div class="news">
        <div class="newsText" v-html="fullNews?news.text:shortenTheNews(news.text)"></div>

        <div class="moreWrapper">
          <button class="more" @click="fullNews=!fullNews" v-text="fullNews?'Mniej...':'Więcej...'"></button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "News",
  props: { news: Object },
  data() {
    return {
      fullNews: false,
      numberOfWords: 30,
      shortNews: ""
    };
  },
  components: {},
  methods: {
    shortenTheNews(text) {
      return (
        text
          .split(" ")
          .slice(0, this.numberOfWords)
          .join(" ") + "..."
      );
    }
    // numberLethersToEnd(text, words) {
    //   return text
    //     .split(" ")
    //     .slice(0, words)
    //     .join(" ").length;
    // },
    // shortenToFullNews(text, words) {
    //   //   this.numberLethersToEnd(text, words);
    //   //   console.log(this.numberLethersToEnd(text, words));
    //   //   console.log(text);

    //   for (let i = this.numberLethersToEnd(text, words); i < text.length; i++) {
    //     // console.log(news.text);
    //     this.shortNews += text[i];
    //   }
    // }
  },
  computed: {},
  created() {
    // this.shortenTheNews(this.news.text, this.words);
  },
  watch: {
    // fullNews(val) {
    //   if (val) {
    //     this.shortenToFullNews(this.news.text, this.words);
    //   }
    // }
  }
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
  & .news {
    display: flex;

    flex-direction: column;
    border: 2px solid $bgcBlack;
    border-bottom-left-radius: 1em;
    & .newsText {
      text-align: justify;

      padding: 0.5em;
    }
    & .moreWrapper {
      display: flex;
      justify-content: flex-end;
      & .more {
        // flex-basis: 10%;
        text-align: center;

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
}
</style>