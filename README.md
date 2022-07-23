# wp-vue-quiz

This project uses

- Vue 3: https://vuejs.org/
- Naive ui: https://www.naiveui.com/en-US/os-theme
- SASS: https://sass-lang.com/
- Wordpress: https://wordpress.com/
- Typescript: https://www.typescriptlang.org/

## Project setup

Open the wp-vue-quiz directory.

```
yarn install
```

### Compiles and hot-reloads for development

```
yarn serve
```

You can see the example in the url http://localhost:8080

### Compiles and minifies for production

## IMPORTANT

TO RENDER THE ASSETS PROPERLY, CHANGE THE publicPath inside the vue.config.js file:

```
"/dev/wp-content/plugins/wp-vue-quiz/dist/"
```

To where your dist directory will be in the url

Build the project

```
yarn build
```

The dist will be in the plugin directory. Put the directory wp-vue-quiz inside the wordpress plugins directory:
"wp-content/plugins"

### Lints and fixes files

```
yarn lint
```
