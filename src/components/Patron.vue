<template>
  <div class="wrapper">
    <div class="wrapperPatronImg">
      <h1 @click="textVisible=!textVisible">św. Anna</h1>
      <p
        @click="textVisible=!textVisible"
        v-show="!textVisible"
      >dowiedz się więcej o naszym patronie...</p>
    </div>
    <div class="wrapperText">
      <TransitionExpand>
        <div class="text" v-if="textVisible">
          <h3>Żywot świętej Anny</h3>
          <p>O życiu świętej Anny, matki Maryi i babki Jezusa Chrystusa nie znajdziemy żadnych informacji w księgach Nowego Testamentu. Ewangelie kanoniczne milczą na jej temat. Jedyne informacje dotyczące życia świętej Anny pojawiają się w pismach apokryficznych, pochodzących z początków chrześcijaństwa. Apokryfy nie należą do ksiąg natchnionych, ale w swojej treści oprócz opisów legendarnych i baśniowych, zawierają informacje prawdziwe[potrzebny przypis], przekazywane przez tradycję Kościoła. Najwięcej wiadomości o matce Maryi znajduje się w Protoewangelii Jakuba i Ewangelii Pseudo-Mateusza.</p>
          <p>Według starego podania święta Anna urodziła się w Judei, gdzie w Betlejem był jej rodzinny dom. Jej rodzice – Stolanus i Emerentiana – byli według tradycji potomkami królewskiego rodu Dawida. Nie posiadali ziemskich dostatków, lecz byli cnotliwi i sprawiedliwi, i żyli w bojaźni Bożej, pełniąc dobre uczynki. Życie ich upływało na bezustannej modlitwie, rozmyślaniu o rzeczach duchowych i pracy. Anna otrzymała od swoich rodziców staranne wychowanie pogłębione przez służbę w Świątyni Jerozolimskiej. Swojego męża Joachima poślubiła, gdy miała 24 lata. Joachim także pochodził z pokolenia Dawidowego. Wychowywać miał się w zamożnej i znakomitej rodzinie w Nazarecie. Joachim i Anna uważali swoje małżeństwo za związek święty, złączony przez Boga. Oboje zachowywali Prawo Boże i kroczyli drogą pobożności zgodnie i przykładnie. Swój majątek dzielili na trzy części: jedną ofiarowywali na utrzymanie świątyni, drugą na potrzeby ludzi biednych i pielgrzymów, trzecią pozostawiali dla siebie.</p>
          <p>
            Anna była wzorem dla wszystkich małżonek. Choć razem z Joachimem byli szczęśliwym małżeństwem, zostali ciężko doświadczeni przez Pana Boga brakiem potomstwa. W ciągu 20 lat małżeństwa nie doczekali się ani synów, ani córek. W kulturze żydowskiej brak dziecka był uważany za hańbę i karę Bożą. Anna i Joachim dotkliwie odczuwali więc brak dziecka. W pokorze znosili tę niesławę, w modlitwie przed Bogiem wyjawiając swój smutek. Z upływem lat, choć malała nadzieja, gorętsze stawały się modlitwa i prośba o potomstwo. Nie brakowało upokorzeń ze strony ludzi. Pewnego dnia Joachim udał się do Jerozolimy, aby złożyć ofiarę w świątyni. Kapłan pełniący służbę nie przyjął ofiary Joachima, wytykając mu brak potomstwa: „Nie godzi się, byś ty jako pierwszy składał swe dary, jako że nie zrodziłeś potomka w Izraelu”. Joachim zrozumiał, że bez potomstwa nie jest godny składania ofiary Bogu. Zasmucony, postanowił nie wrócić do Anny. Opuścił dom, małżonkę i udał się na pustynię. W górach rozbił swój namiot i tam pościł 40 dni i 40 nocy, oczekując, aby Bóg spojrzał na jego smutek. Anna, nie wiedząc, gdzie jest Joachim, opłakiwała swoje wdowieństwo. Jej smutek stał się jeszcze większy, kiedy służąca wytknęła Annie bezdzietność. W popołudniowej porze Anna udała się do ogrodu, by tam opłakiwać swoje życie. Kiedy podniosła oczy do nieba i zobaczyła gniazdo wróbli na drzewie laurowym, wypowiedziała błagalną modlitwę do Boga: „Panie, Boże wszechmogący, który obdarzyłeś potomstwem wszystkie stworzenia, zwierzęta dzikie i domowe, gady, ryby, ptaki, i wszystko to cieszy się ze swego potomstwa, dlaczego mnie jedną odsunąłeś od daru Twojej łaskawości? Ty wiesz, Panie, że na początku małżeństwa złożyłam ślub, iż jeżeli dasz mi syna lub córkę, ofiaruję je Tobie w Twym świętym przybytku”. Wtedy ukazał się anioł, który zapowiedział narodzenie dziecka i powrót Joachima. W tym samym czasie Joachim również miał widzenia anioła, który pocieszył go, mówiąc:
            „Pan Bóg przyjął łaskawie twoją modlitwę i jałmużnę, otrzymasz córeczkę i nadasz jej na imię Maryja; ta córeczka będzie od dzieciństwa Bogu oddana i pełna Ducha Świętego”.
          </p>
          <p>Małżonkowie ogromnie ucieszyli się radosną nowiną. W 45 roku życia Anny, dnia 8 września, urodziła się dziewczynka, której zgodnie ze zwyczajem żydowskim w 15 dniu nadano imię. 80 dni po narodzeniu Maryi rodzice przynieśli ją do świątyni, aby złożyć przepisaną prawem ofiarę i spełnić ślubowanie. W wieku 14 lat Maryja została żoną Józefa. Według przekazów wkrótce zmarł Joachim. Anna zamieszkała zaś z córką i jej mężem w Nazarecie, dożywszy 80 lat. W godzinie śmierci pożegnała się z najbliższymi, poleciła Bogu swego ducha i zasnęła w Panu przy błogosławieństwie Jezusa i przy modlitwie Maryi i Józefa. Ciało jej pochowano blisko ciała Joachima w Dolinie Jozafata.</p>
          <p>Kult św. Anny rozwinął się na Wschodzie ok. IV wieku. Pierwszy klasztor ku czci św. Anny powstał na Zachodzie w 701 roku we Floriac koło Rouen. Tam miały się znajdować relikwie św. Anny, przeniesione ze Wschodu. Obecnie w skarbcu katedry św. Wawrzyńca w Genui pokazują relikwię ręki św. Anny, ale są duże zastrzeżenia co do jej autentyczności. Wspomnienie św. Anny na Zachodzie obchodzimy 26 lipca, a na Wschodzie 25 lipca.</p>
          <p>Św. Anna jest patronką Florencji, Innsbrucku i Neapolu, także szczęśliwego małżeństwa i szczęśliwego dzieciństwa, szczęśliwego porodu, matek, wdów, gospodyń domowych, robotnic, pomocnic domowych, górników, tkaczy, tokarzy, stolarzy artystycznych, młynarzy, kramarzy, żeglarzy, krawców, koronkarzy, służących; jest wzywana w modlitwie o deszcz, o poprawę pogody, o znalezienie rzeczy zgubionych.</p>
          <p>Imię Anna pochodzi z hebrajskiego hanna, co znaczy „łaska”.</p>
          <p>W ikonografii ukazywana najczęściej z Najświętszą Marią Panną jako dziewczynką lub jako tzw. św. Anna Samotrzeć (Samotrzecia) – z Najświętszą Marią Panną i małym Jezusem.</p>

          <p style="text-align: right">Źródło: Wikipedia</p>
          <br>
          <div class="wrapperButton">
            <BackToUp>
              <button class="more" @click="less()">Zwiń tekst</button>
            </BackToUp>
          </div>
        </div>
      </TransitionExpand>
    </div>
  </div>
</template>

<script>
import BackToUp from "./BackToUp";
import TransitionExpand from "./TransitionExpand";
export default {
  name: "Patron",
  props: {},
  data() {
    return { textVisible: false };
  },
  components: { TransitionExpand, BackToUp },
  methods: {
    less() {
      this.textVisible = false;
    }
  },
  computed: {},
  created() {},
  watch: {}
};
</script>

<style lang="scss" scoped>
@import "./../css/common.scss";
.wrapper {
  & .wrapperPatronImg {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    width: 100%;
    padding-bottom: 2em;
    position: relative;
    top: 0;

    min-height: calc(100vh - 75px);

    @include background("./../assets/anna_matka_mb.jpg", 50%, 25%);
  }
  & h1,
  & p {
    color: white;
    cursor: pointer;
  }
  & .wrapperText {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-end;
    width: 100%;
    padding: 1.5em;
    position: relative;
    top: 0;
    & h3 {
      text-align: center;
      font-size: 1.5em;
      padding-bottom: 1em;
      padding-top: 1.5em;
    }
    p + p {
      text-indent: 2em;
    }
    p {
      margin: 1.5em 1.5em;
      text-align: justify;
      & .right {
        text-align: right !important;
      }
    }
  }
  & .wrapperButton {
    @include buttonMore($bgcBlack, $yellow, $yellow);
  }
}
</style>