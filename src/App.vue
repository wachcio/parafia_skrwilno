<template>
  <div id="app">
    <div class="container">
      <Navigation :scrolled="scrolled" @setScroll="setScroll"/>
      <section id="patron">
        <Patron/>
      </section>
      <section id="wordOfGod">
        <h1>Słowo Boże</h1>
        <Liturgy
          v-for="(liturgy, index) in liturgies"
          :key="index"
          :day="index"
          v-bind:liturgy="liturgy"
        />
      </section>
      <section id="news">
        <h1>Aktualności</h1>
        <News v-for="(item, index) of news" :key="index" :news="item"/>
      </section>
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
import Patron from "./components/Patron";
import Liturgy from "./components/Liturgy";
import News from "./components/News";
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
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec libero nunc. Curabitur et erat a massa convallis scelerisque ac sit amet elit. Nunc id ante ac tortor pharetra convallis nec non neque. Suspendisse mi libero, faucibus eget augue non, pulvinar luctus sapien. Praesent efficitur scelerisque purus, eget fringilla tortor rhoncus in. Etiam vestibulum eu arcu et varius. Aenean eget dui id sapien ullamcorper euismod in vitae nunc."
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
  components: { Navigation, Patron, Liturgy, News },
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
h1 {
  text-align: center;
}
</style>
