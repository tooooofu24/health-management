<template>
  <div class="col-12">
    <label for="">その他症状など</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-circle-info"></i
      ></label>
      <textarea name="comment" id="" rows="2" class="form-control"></textarea>
    </div>
  </div>
  <FormNavigationComponent
    :page="$parent.page"
    @updatePage="updatePage"
  ></FormNavigationComponent>
</template>
<script>
import FormNavigationComponent from "./FormNavigationComponent.vue";
export default {
  data: function () {
    return {
      page: 1,
    };
  },
  methods: {
    updatePage(num) {
      this.$emit("updatePage", num);
    },
  },
  components: {
    FormNavigationComponent,
  },
  emits: ["updatePage"],
};
</script>