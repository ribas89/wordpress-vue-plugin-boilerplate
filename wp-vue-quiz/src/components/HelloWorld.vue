<style scoped lang="scss">
@import "./HelloWorld.scss";
</style>

<script lang="ts">
import { defineComponent } from "vue";
import { store } from "../store";
import {
  NButton,
  NSpace,
  NAlert,
  NLayout,
  NRadioGroup,
  NRadioButton,
} from "naive-ui";

export default defineComponent({
  name: "HelloWorld",
  data() {
    return {
      store,
    };
  },
  components: {
    NButton,
    NSpace,
    NAlert,
    NLayout,
    NRadioGroup,
    NRadioButton,
  },
  setup() {
    return {
      handleClick() {
        store.continuar = true;
      },
    };
  },
});
</script>

<template>
  <n-layout width="600">
    <n-space vertical v-if="!store.continuar">
      <n-alert title="Pergunta importante!" type="warning">
        Qual é o melhor?
      </n-alert>

      <n-radio-group
        v-model:value="store.animal"
        name="left-size"
        style="margin-bottom: 12px"
      >
        <n-radio-button value="cachorro"> Cachorro </n-radio-button>
        <n-radio-button value="gato"> Gato </n-radio-button>
      </n-radio-group>

      <n-button
        type="primary"
        :disabled="!store.animal"
        @click="handleClick"
        size="large"
      >
        Continuar
      </n-button>
    </n-space>
    <div v-else>
      <div v-if="store.animal === 'gato'">
        <img width="300" src="../assets/gato.png" />
      </div>
      <div v-if="store.animal === 'cachorro'">
        <img width="300" src="../assets/dog.png" />
      </div>
    </div>
  </n-layout>
</template>
