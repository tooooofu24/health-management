<template>
  <form action="">
    <FormOneComponent
      v-if="page == 1"
      @updatePage="updatePage"
    ></FormOneComponent>
    <FormTwoComponent
      v-if="page == 2"
      @updatePage="updatePage"
    ></FormTwoComponent>
    <FormThreeComponent
      v-if="page == 3"
      @updatePage="updatePage"
    ></FormThreeComponent>
    <FormFourComponent
      v-if="page == 4"
      @updatePage="updatePage"
    ></FormFourComponent>
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
