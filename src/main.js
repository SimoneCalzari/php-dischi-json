const { createApp } = Vue;

createApp({
  data() {
    return {
      students: [],
      urlApi: "server.php",
    };
  },
  created() {
    axios.get(this.urlApi).then((response) => {
      this.students = response.data;
    });
  },
}).mount("#app");
