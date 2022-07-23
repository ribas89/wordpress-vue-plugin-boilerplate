console.warn("WP-VUE-QUIZ CARREGADO");
import { createApp } from "vue";
import App from "./App.vue";

const app = createApp(App);
app.config.errorHandler = function (err, vm, info) {
  console.error({
    error: err,
    params: { info: info },
  });
};

window.addEventListener(
  "load",
  function (event) {
    app.mount("#wp-vue-quiz");
  },
  false
);
