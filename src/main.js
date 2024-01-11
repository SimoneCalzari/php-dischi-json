const { createApp } = Vue;

createApp({
  data() {
    return {
      students: [],
      urlApi: "server.php",
    };
  },
  methods: {
    getDisks() {
      axios.get(this.urlApi).then((response) => {
        this.students = response.data;
      });
    },
  },
  created() {
    this.getDisks();
  },
}).mount("#app");
