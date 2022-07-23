const { defineConfig } = require("@vue/cli-service");
const path = require("path");
module.exports = defineConfig({
  transpileDependencies: true,
  lintOnSave: false,
  publicPath:
    process.env.NODE_ENV === "production"
      ? "/dev/wp-content/plugins/wp-vue-quiz/dist/"
      : "/",
  outputDir: path.resolve(__dirname, "../plugin/wp-vue-quiz/dist"),
});
