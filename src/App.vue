<template>
  <div id="app">
    <div class="container">
      <Navigation :scrolled="scrolled" @setScroll="setScroll" :window="window"/>
      <section id="patron">
        <Patron/>
      </section>
      <section id="wordOfGod">
        <MainTitle>Słowo Boże</MainTitle>
        <Liturgy
          v-for="(liturgy, index) in liturgies"
          :key="index"
          :day="index"
          v-bind:liturgy="liturgy"
        />
      </section>
      <section id="news">
        <MainTitle>Aktualności</MainTitle>

        <News :window="window"/>
      </section>
      <section id="ourChurch">
        <MainTitle>Nasz kościół</MainTitle>
        <OurChurch/>
      </section>
      <section id="holyMasses">
        <MainTitle>Msze święte</MainTitle>
        <HolyMasses/>
      </section>
      <section id="clergy">
        <MainTitle>Duchowni</MainTitle>
        <Clergy/>
      </section>
      <section id="gallery">
        <MainTitle>Galeria</MainTitle>
        <Gallery/>
      </section>
      <section id="history">
        <MainTitle>Rys historyczny</MainTitle>
        <History/>
      </section>
      <section id="contact">
        <MainTitle>Kontakt</MainTitle>
        <Contact/>
      </section>
      <footer>
        <h1>Wachcio&copy;2019</h1>
      </footer>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import Navigation from "./components/Navigation";
import Patron from "./components/Patron";
import Liturgy from "./components/Liturgy";
import News from "./components/News";
import OurChurch from "./components/OurChurch";
// import TransitionExpand from "./components/TransitionExpand";
import HolyMasses from "./components/HolyMasses";
import Clergy from "./components/Clergy";
import Gallery from "./components/Gallery";
import History from "./components/History";
import Contact from "./components/Contact";
import MainTitle from "./components/MainTitle";
export default {
  name: "app",
  data() {
    return {
      scrolled: false,
      liturgies: "",
      window: {
        width: 0,
        height: 0,
        minDesktop: 1024,
        minTablet: 768
      }
    };
  },
  components: {
    Navigation,
    Patron,
    Liturgy,
    News,
    OurChurch,
    HolyMasses,
    Clergy,
    Gallery,
    History,
    Contact,
    MainTitle
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
    getLiturgies() {
      axios
        .get("http://wachcio.pl/parafia_skrwilno/API/liturgyCallendar.php")
        .then(response => {
          // handle success
          // console.log(response);
          this.liturgies = response.data;
          // if (this.liturgies.today.date == this.liturgies.tomorow.date) {
          if (this.liturgies.today.weekday_name == "niedziela") {
            this.liturgies.sunday = null;
          }
          if (this.liturgies.tomorrow.weekday_name == "niedziela") {
            this.liturgies.tomorrow = null;
          }
        });
    },
    handleResize() {
      this.window.width = window.innerWidth;
      this.window.height = window.innerHeight;
    }
  },
  watch: {},

  created() {
    this.getLiturgies();
  },
  destroyed() {
    window.removeEventListener("resize", this.handleResize);
  },
  beforeMount() {
    window.addEventListener("scroll", this.handleScroll);
    // console.log("scrolling Injected");
  },
  beforeDestroy() {
    window.removeEventListener("scroll", this.handleScroll);
    // console.log("scrolling Destroyed");
  },
  mounted() {
    window.addEventListener("resize", this.handleResize);
    this.handleResize();
  }
};
</script>

<style lang="scss">
@import "./css/common.scss";
section {
  // height: 350px;
  color: white;
}
// .h1Wrapper {
//   display: flex;
//   justify-content: center;
//   align-items: center;

//   & h1 {
//     margin: 0;
//     padding: 0;
//     // @include buttonGradient();
//     // width: 100%;
//     // text-align: center;
//   }
// }

// section .wrapper {
//   height: calc(100vh - 75px);
//   @media (orientation: landscape) {
//     height: calc(100vw - 75px);
//   }
// }
</style>
