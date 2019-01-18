<template>
  <div id="app">
    <div class="container">
      <Navigation/>
      <section id="first"></section>
      <section id="wordOfGod"></section>
      <section id="news"></section>
      <section id="ourChurch"></section>
      <section id="holyMasses"></section>
      <section id="clergy"></section>
      <section id="gallery"></section>
      <section id="history"></section>
      <section id="contact"></section>
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
  components: { Navigation }
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
  height: 150px;
  color: #222;
}
</style>
