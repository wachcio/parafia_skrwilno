<template>
  <div class="wrapper">
    <form id="contact">
      <div class="labelWrapper">
        <label for="email">Twój e-mail</label>
        <input type="email" name="email" id="email" v-model="email">
      </div>
      <div class="labelWrapper">
        <label for="name">Nazwisko i imię</label>
        <input type="text" name="name" id="name" v-model="name">
      </div>
      <div class="labelWrapper">
        <label for="message">Wiadomość</label>
        <textarea name="message" id="message" rows="5" cols="27" v-model="message"></textarea>
      </div>
      <div class="buttonWrapper">
        <button type="submit" @click.prevent :disabled="error">Wyślij</button>
      </div>
    </form>
    <div class="error" v-if="error">{{errorMessage}}</div>
  </div>
</template>

<script>
import { validationMixin } from "vuelidate";
import required from "vuelidate/lib/validators/required";
import minLength from "vuelidate/lib/validators/minLength";
import email from "vuelidate/lib/validators/email";

export default {
  name: "Contact",
  props: {},
  data() {
    return {
      name: "",
      email: "",
      message: "",
      error: false,
      errorMessage: "Błąd w formularzu!"
    };
  },
  validations: {
    email: {
      required,
      email
    },
    name: {
      required,
      minLength: minLength(4)
    },
    message: {
      required,
      minLength: minLength(10)
    }
  },
  components: {},
  methods: {},
  computed: {},
  mixins: [validationMixin],
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
  justify-content: flex-start;
  width: 100%;
  padding-bottom: 2em;
  color: #fff;

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
  text-align: center;
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
  &:disabled {
    opacity: 0.3;
  }
}
</style>