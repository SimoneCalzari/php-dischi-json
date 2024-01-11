const { createApp } = Vue;

createApp({
  data() {
    return {
      cds: [],
      urlApi: "server.php",
      currentId: 0,
      currentCd: {},
    };
  },
  methods: {
    // funzione per richiedere tutt gli album
    getDisks() {
      axios.get(this.urlApi).then((response) => {
        this.cds = response.data;
      });
    },
    // funzione per richiedere solo un album specifico
    clickCard(id) {
      this.currentId = id;
      const currentApi = this.urlApi + "?id=" + id;
      axios.get(currentApi).then((response) => {
        this.currentCd = response.data;
      });
    },
  },
  created() {
    // chiamata dei dati alla creazione dell applicazione
    this.getDisks();
  },
}).mount("#app");
