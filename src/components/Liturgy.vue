<template>
  <div class="wrapper" v-if="liturgy">
    <h4 @click="show.liturgy = !show.liturgy">
      {{checkDay}}
      <i :class="arrow(show.liturgy)"></i>
    </h4>

    <TransitionExpand>
      <div class="content" v-show="show.liturgy">
        <p>
          {{liturgy.liturgy_year}}
          <br>
          {{liturgy.period_name}}
          <br>
          Patroni: {{liturgy.patronas}}
          <br>
          Kolor szaty: {{liturgy.robe}}
        </p>
        <h5 @click="show.readingOne = !show.readingOne">
          Pierwsze czytanie: {{liturgy.reading_one}}
          <i :class="arrow(show.readingOne)"></i>
        </h5>
        <TransitionExpand>
          <p v-html="liturgy.reading_one_text" v-show="show.readingOne"></p>
        </TransitionExpand>
        <h5 @click="show.psalm = !show.psalm">
          Psalm responsoryjny: {{liturgy.psalm}}
          <i :class="arrow(show.psalm)"></i>
        </h5>
        <TransitionExpand>
          <p v-html="liturgy.psalm_text" v-show="show.psalm"></p>
        </TransitionExpand>
        <h5 @click="show.beforeGospel = !show.beforeGospel">
          Werset przed ewangelią: {{liturgy.before_gospel}}
          <i :class="arrow(show.beforeGospel)"></i>
        </h5>
        <TransitionExpand>
          <p v-html="liturgy.before_gospel_text" v-show="show.beforeGospel"></p>
        </TransitionExpand>
        <h5 @click="show.gospel = !show.gospel">
          Ewangelia: {{liturgy.gospel}}
          <i :class="arrow(show.gospel)"></i>
        </h5>
        <TransitionExpand>
          <p v-html="liturgy.gospel_text" v-show="show.gospel"></p>
        </TransitionExpand>
      </div>
    </TransitionExpand>
    <div class="space"></div>
  </div>
</template>

<script>
import TransitionExpand from "./TransitionExpand";
export default {
  name: "Liturgy",
  props: {
    liturgy: null,
    day: null
  },
  data() {
    return {
      show: {
        liturgy: false,
        readingOne: false,
        gospel: false,
        psalm: false,
        beforeGospel: false
      }
    };
  },
  components: {
    TransitionExpand
  },
  methods: {
    showHideLiturgy() {
      this.show.liturgy = !this.show.liturgy;
    },
    arrow(element) {
      if (element == true) {
        return "icon icon-arrow-up";
      } else {
        return "icon icon-arrow-up rotate";
      }
    }
  },
  computed: {
    checkDay() {
      let result = "";
      if (this.day == "today") {
        result = `Liturgia na dziś ${this.liturgy.date} (${
          this.liturgy.weekday_name
        })`;
      }
      if (this.day == "tomorrow") {
        result = `Liturgia na jutro ${this.liturgy.date} (${
          this.liturgy.weekday_name
        })`;
      }
      if (this.day == "sunday") {
        result = `Liturgia na niedzielę ${this.liturgy.date}`;
      }
      return result;
    }
  },
  created() {},
  watch: {}
};
</script>

<style lang="scss" scoped>
@import "./../css/common.scss";
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  flex-wrap: wrap;
}
h4,
h5 {
  width: 100vw;
  // flex-basis: 100%;
  // margin: 0 5px;
  // margin-bottom: 10px;
  // margin-left: 5px;
  padding: 0 0.5em;
  transition: all 0.3s ease-in-out;
  background-color: $bgcBlack;
  // border: $bgcBlack 0 solid;
  color: $yellow;
  // border-radius: 10px;
  // border-top-left-radius: 10px;
}
h4:hover,
h5:hover {
  // padding-left: 20px;
  cursor: pointer;
}
h5 {
  font-size: 1.2em !important;
}
h4 {
  display: flex;
  justify-content: flex-start;
}

p {
  width: 100vw;
  padding: 0 0.5em;
  // margin-left: 5px;
  // margin-right: 5px;
  // margin-bottom: 5px;
  display: block;
  text-align: justify;
  color: $bgcBlack;
  // border: $bgcBlack 2px solid;
  background-color: lighten($bgcBlack, 70%);
}
.titleWrapper {
  // display: flex;
  // flex-direction: row-reverse;
  // justify-content: flex-start;
  // width: 100%;
}
i {
  // align-self: flex-start;
  // right: 10%;
  // padding: 0 1em;
  // position: absolute;
  // color: $yellow;
  // background-color: $bgcBlack;
  // left: 1em;
  // top: 0;
  transition: all 0.5s ease-in-out;
  margin-right: 1em;
  margin-left: 0.5em;
  // width: 100%;
  // float: right;

  align-self: center;
}
.space {
  height: 0.1em;
}
.rotate {
  transform: rotateZ(180deg);
}
</style>