<template>
  <div class="container">
    <div class="wrapper" v-for="(item, index) of news" :key="index">
      <TransitionExpand>
        <div class="wrapper2" v-if="index<numberOfNews">
          <div class="title">{{item.title}}</div>
          <div class="news">
            <div class="newsText" v-html="fullNews[index]?item.text:shortenTheNews2(index)"></div>

            <div class="moreWrapper">
              <button
                class="more"
                @click="changeFullShort(index)"
                v-text="fullNews[index]?'Mniej...':'Więcej...'"
              ></button>
            </div>
          </div>
        </div>
      </TransitionExpand>
    </div>
    <div class="moreWrapper">
      <button class="next" @click="numberOfNews++">Pokaż starsze...</button>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
import TransitionExpand from "./TransitionExpand";
import JSON from "./data.json";
export default {
  name: "News",
  props: {},
  data() {
    return {
      numberOfWords: 30,
      numberOfNews: 3,
      fullNews: [],
      news: JSON
    };
  },
  components: { TransitionExpand },
  methods: {
    shortenTheNews() {
      for (let item of this.news) {
        // console.log(item);

        item.shortText =
          item.text
            .split(" ")
            .slice(0, this.numberOfWords)
            .join(" ") + "...";
      }
    },
    shortenTheNews2(index) {
      // for (let item of this.news) {
      // console.log(item);

      return (
        this.news[index].text
          .split(" ")
          .slice(0, this.numberOfWords)
          .join(" ") + "..."
      );
    },
    fillFullNews() {
      for (let i = 0; i < this.news.length; i++) {
        // this.fullNews = false;
        // Vue.set(this.news[i].fullNews, i, false);
        this.fullNews.push(false);
      }
    },
    changeFullShort(i) {
      if (this.fullNews[i]) {
        Vue.set(this.fullNews, i, false);
        // this.shortenTheNews2(i);
      } else {
        Vue.set(this.fullNews, i, true);
      }
    }
  },
  computed: {},
  created() {
    // this.shortenTheNews();
    this.fillFullNews();
  },
  watch: {
    // numberOfWords: function() {
    //   this.shortenTheNews();
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
  & .wrapper2 {
    padding: 3px 0;
  }

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
.next {
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
</style>