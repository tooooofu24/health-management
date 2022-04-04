<template>
  <form action="">
    <div v-show="page == 1">
      <FormOneComponent @updatePage="updatePage"></FormOneComponent>
    </div>
    <div v-show="page == 2">
      <FormTwoComponent @updatePage="updatePage"></FormTwoComponent>
    </div>
    <div v-show="page == 3">
      <FormThreeComponent @updatePage="updatePage"></FormThreeComponent>
    </div>
    <div v-show="page == 4">
      <FormFourComponent @updatePage="updatePage"></FormFourComponent>
    </div>
  </form>
</template>
<script>
import FormOneComponent from "./FormOneComponent.vue";
import FormTwoComponent from "./FormTwoComponent.vue";
import FormThreeComponent from "./FormThreeComponent.vue";
import FormFourComponent from "./FormFourComponent.vue";
export default {
  data: function () {
    return {
      page: 1,
    };
  },
  methods: {
    updatePage(num) {
      this.page = num;
      console.log(this.page);
    },
  },
  components: {
    FormOneComponent,
    FormTwoComponent,
    FormThreeComponent,
    FormFourComponent,
  },
};
</script>
