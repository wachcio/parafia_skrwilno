<template>
  <div class="wrapper">
    <form id="contact">
      <div class="labelWrapper">
        <label for="email">Twój e-mail</label>
        <input type="email" name="email" id="email">
      </div>
      <div class="labelWrapper">
        <label for="name">Nazwisko i imię</label>
        <input type="text" name="name" id="name">
      </div>
      <div class="labelWrapper">
        <label for="message">Wiadomość</label>
        <textarea name="message" id="message" rows="5" cols="27"></textarea>
      </div>
      <div class="buttonWrapper">
        <button type="submit" @click.prevent>Wyślij</button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "Contact",
  props: {},
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
.wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  padding-bottom: 2em;

  @include background("./../assets/antique-black-call-1416530.jpg", 50%, 20%);
  height: calc(100vh - 75px);
  @media (orientation: landscape) {
    height: calc(100vw - 75px);
  }
}
.labelWrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
h1,
p,
label {
  color: white;
  text-align: center;
  font-size: 1.2em;
}
input {
  height: 45px;
}

input,
textarea {
  margin: 8px;
  padding: 8px;
  color: $bgcBlack;
  font-size: 20px;
  font-style: italic;
  // text-shadow: 4px 4px 11px rgba(0, 0, 0, 1);
  background-color: $yellow;
  border: 0 $bgcBlack solid;
  border-radius: 15px;

  border-bottom-right-radius: 0;

  &:focus {
    box-shadow: 0px 0px 10px 2px $yellow;
  }
}
.buttonWrapper {
  display: flex;
  align-items: flex-end;
  justify-content: flex-end;
}
button {
  text-align: center;

  background-color: $yellow;
  border: 2px solid $yellow;
  border-radius: 1em;
  border-bottom-right-radius: 0;
  padding: 0.5em 1em;
  margin: 0.3em;
  font-size: 1.1em;
  font-style: italic;
  color: $bgcBlack;
}
</style>