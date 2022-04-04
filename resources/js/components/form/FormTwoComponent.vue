<template>
  <div class="col-12">
    <label for="">昨晩の体温</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-moon"></i
      ></label>
      <input
        type="number"
        class="form-control"
        name=""
        id=""
        max="40"
        min="34"
      />
    </div>
  </div>
  <div class="col-12">
    <label for="">起床時の体温</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-sun"></i
      ></label>
      <input
        type="number"
        class="form-control"
        name=""
        id=""
        max="40"
        min="34"
      />
    </div>
  </div>
  <div class="col-12">
    <label for="">就寝時間</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-regular fa-moon"></i
      ></label>
      <input type="time" class="form-control" name="" id="" />
    </div>
  </div>
  <div class="col-12">
    <label for="">起床時間</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-regular fa-sun"></i
      ></label>
      <input type="time" class="form-control" name="" id="" />
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