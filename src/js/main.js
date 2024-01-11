const { createApp } = Vue;

createApp({
  data() {
    return {
      cds: [],
      urlApi: "server.php",
    };
  },
  methods: {
    getDisks() {
      axios.get(this.urlApi).then((response) => {
        this.cds = response.data;
      });
    },
  },
  created() {
    this.getDisks();
  },
}).mount("#app");
