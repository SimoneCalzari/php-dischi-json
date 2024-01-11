const { createApp } = Vue;

createApp({
  data() {
    return {
      cds: [],
      urlApi: "server.php",
      currentId: null,
      currentCd: {},
    };
  },
  methods: {
    getDisks() {
      axios.get(this.urlApi).then((response) => {
        this.cds = response.data;
      });
    },
    clickCard(id) {
      this.currentId = id;
      const currentApi = this.urlApi + "?id=" + id;
      axios.get(currentApi).then((response) => {
        this.currentCd = response.data;
      });
    },
  },
  created() {
    this.getDisks();
  },
}).mount("#app");
