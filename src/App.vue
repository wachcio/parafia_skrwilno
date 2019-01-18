<template>
  <div id="app">
    <div class="container">
      <Navigation :scrolled="scrolled" @setScroll="setScroll"/>
      <section id="first">Pierwsza</section>
      <section id="wordOfGod">
        <Liturgy v-for="(liturgy, index) in liturgies" :key="index" v-bind:liturgy="liturgy"/>
      </section>
      <section id="news">Aktualności</section>
      <section id="ourChurch">Nasz kościół</section>
      <section id="holyMasses">Msze</section>
      <section id="clergy">Duchowni</section>
      <section id="gallery">Galeria</section>
      <section id="history">Historia</section>
      <section id="contact">Kontakt</section>
      <footer>
        <h1>Wachcio&copy;2019</h1>
      </footer>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import Navigation from "./components/Navigation";
import Liturgy from "./components/Liturgy";
export default {
  name: "app",
  data() {
    return {
      scrolled: false,
      liturgies: ""
    };
  },
  methods: {
    setScroll(val) {
      this.scrolled = val;
    },
    handleScroll() {
      if (!this.scrolled) {
        this.scrolled = true;
      }
      // this.scrolled = false;
    },
    getData() {
      axios
        .get("http://wachcio.pl/kosciol/API/liturgyCallendar.php")
        .then(response => {
          // handle success
          // console.log(response);
          this.liturgies = response.data;
          // if (this.liturgies.today.date == this.liturgies.tomorow.date) {
          if (this.liturgies.today.weekday_name == "niedziela") {
            this.liturgies.sunday = null;
          }
          if (this.liturgies.tomorrow.weekday_name == "niedziela") {
            this.liturgies.sunday = null;
          }
        });
    }
  },
  components: { Navigation, Liturgy },
  created() {
    this.getData();
  },
  beforeMount() {
    window.addEventListener("scroll", this.handleScroll);
    // console.log("scrolling Injected");
  },
  beforeDestroy() {
    window.removeEventListener("scroll", this.handleScroll);
    // console.log("scrolling Destroyed");
  }
};
</script>

<style lang="scss">
@import "./css/common.scss";
section {
  height: 350px;
  color: $bgcBlack;
}
#wordOfGod {
  height: auto;
}
</style>
