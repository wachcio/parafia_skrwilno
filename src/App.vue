<template>
  <div id="app">
    <div class="container">
      <Navigation :scrolled="scrolled" @setScroll="setScroll"/>
      <section id="patron">
        <Patron/>
        <TransitionExpand>
          <div></div>
        </TransitionExpand>
      </section>
      <section id="wordOfGod">
        <div class="h1Wrapper">
          <h1>Słowo Boże</h1>
        </div>
        <Liturgy
          v-for="(liturgy, index) in liturgies"
          :key="index"
          :day="index"
          v-bind:liturgy="liturgy"
        />
      </section>
      <section id="news">
        <div class="h1Wrapper">
          <h1>Aktualności</h1>
        </div>

        <News v-for="(item, index) of news" :key="index" :news="item"/>
      </section>
      <section id="ourChurch">
        <div class="h1Wrapper">
          <h1>Nasz kościół</h1>
        </div>
        <OurChurch/>
      </section>
      <section id="holyMasses">
        <div class="h1Wrapper">
          <h1>Msze święte</h1>
        </div>
        <HolyMasses/>
      </section>
      <section id="clergy">
        <div class="h1Wrapper">
          <h1>Duchowni</h1>
        </div>
        <Clergy/>
      </section>
      <section id="gallery">
        <div class="h1Wrapper">
          <h1>Galeria</h1>
        </div>
        <Gallery/>
      </section>
      <section id="history">
        <div class="h1Wrapper">
          <h1>Rys historyczny</h1>
        </div>
        <History/>
      </section>
      <section id="contact">
        <div class="h1Wrapper">
          <h1>Kontakt</h1>
        </div>
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
import TransitionExpand from "./components/TransitionExpand";
import HolyMasses from "./components/HolyMasses";
import Clergy from "./components/Clergy";
import Gallery from "./components/Gallery";
import History from "./components/History";
import Contact from "./components/Contact";
export default {
  name: "app",
  data() {
    return {
      scrolled: false,
      liturgies: "",
      news: [
        {
          title: "Wydarzenie parafialne 1",
          text:
            "Lorem ipsum dolor sit amet, <b>scelerisque</b> consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et <i> a massa convallis</i> <h5>scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque.</h5> Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur  purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc."
        },
        {
          title: "Wydarzenie parafialne 2",
          text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc."
        },
        {
          title: "Wydarzenie parafialne 3",
          text:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc."
        }
      ]
    };
  },
  components: {
    Navigation,
    Patron,
    Liturgy,
    News,
    OurChurch,
    TransitionExpand,
    HolyMasses,
    Clergy,
    Gallery,
    History,
    Contact
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
            this.liturgies.tomorrow = null;
          }
        });
    }
  },

  created() {
    this.getLiturgies();
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
  // height: 350px;
  color: $bgcBlack;
}
.h1Wrapper {
  display: flex;
  justify-content: center;
  align-items: center;

  & h1 {
    margin: 0;
    padding: 0;
    // @include buttonGradient();
    // width: 100%;
    // text-align: center;
  }
}

// section .wrapper {
//   height: calc(100vh - 75px);
//   @media (orientation: landscape) {
//     height: calc(100vw - 75px);
//   }
// }
</style>
