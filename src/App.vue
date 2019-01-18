<template>
  <div id="app">
    <div class="container">
      <Navigation :scrolled="scrolled" @setScroll="setScroll"/>
      <section id="first">Pierwsza</section>
      <section id="wordOfGod">Słowo Boże</section>
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
import Navigation from "./components/Navigation";
export default {
  name: "app",
  data() {
    return {
      scrolled: false
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
    }
  },
  components: { Navigation },
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
*,
::after,
::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: "Roboto", sans-serif;
  font-size: 15px;
  color: #f3bc3f;
  background-color: whitesmoke;
  min-width: 250px;
}

.container {
  display: flex;
  flex-direction: column;
}

footer {
  display: flex;
  flex-direction: row;
  align-items: center;
  text-align: center;

  height: 60px;
  background-color: #222;
  & h1 {
    width: 100%;
    font-size: 1em;
  }
}
section {
  height: 350px;
  color: #222;
}
</style>
