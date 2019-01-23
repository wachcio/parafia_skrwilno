<template>
  <div class="wrapper">
    <form id="contact">
      <div class="labelWrapper">
        <label for="email">Twój e-mail</label>
        <input
          class="email"
          type="email"
          name="email"
          id="email"
          v-model="email"
          @input="$v.email.$touch()"
          :class="{'error':$v.email.$dirty && $v.email.$invalid}"
        >
        <div class="errorMessage" v-if="$v.email.$dirty && $v.email.$invalid">Podaj poprawny e-mail.</div>
      </div>
      <div class="labelWrapper">
        <label for="name">Nazwisko i imię</label>
        <input
          class="name"
          type="text"
          name="name"
          id="name"
          v-model="name"
          @input="$v.name.$touch()"
          :class="{'error':$v.name.$dirty && $v.name.$invalid}"
        >
        <div
          class="errorMessage"
          v-if="$v.name.$dirty && $v.name.$invalid"
        >Pole powinno mieć conajmniej {{$v.name.$params.minLength.min}} znaków.</div>
      </div>
      <div class="labelWrapper">
        <label for="message">Wiadomość</label>
        <textarea
          class="message"
          name="message"
          id="message"
          rows="5"
          cols="27"
          v-model="message"
          @input="$v.message.$touch()"
          :class="{'error':$v.message.$dirty && $v.message.$invalid}"
        ></textarea>
        <div
          class="errorMessage"
          v-if="$v.message.$dirty && $v.message.$invalid"
        >Wiadomość powinna mieć conajmniej {{$v.message.$params.minLength.min}} znaków.</div>
      </div>
      <div class="buttonWrapper">
        <button class="more" type="submit" @click.prevent :disabled="$v.$invalid">Wyślij</button>
      </div>
    </form>
  </div>
</template>

<script>
import { validationMixin } from "vuelidate";
import { required, minLength, email } from "vuelidate/lib/validators";

export default {
  name: "Contact",
  props: {},
  data() {
    return {
      name: "",
      email: "",
      message: "",
      error: "",
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
      minLength: minLength(5)
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
  created() {
    this.error = this.$v.$invalid;
  },
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
  color: #fff;

  @include background("./../assets/antique-black-call-1416530.jpg", 50%, 20%);
  min-height: calc(100vh - 75px);

  @media (orientation: landscape) {
    min-height: calc(100vw - 75px);
  }
}
form {
  margin-top: 0.5em;
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
  @include buttonMore($yellow, $yellow, $bgcBlack);
  & button:disabled {
    opacity: 0.3;
  }
}
.error {
  border: 2px solid red;
  border-radius: 1em;
  border-bottom-right-radius: 0;
}
.errorMessage {
  color: red;
}
</style>