<template>
  <div class="col-12">
    <label for="">回答する日付</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-calendar"></i
      ></label>
      <input type="date" class="form-control" name="" id="" value="" />
    </div>
  </div>
  <div class="col-12">
    <label for="">クラス</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-school"></i
      ></label>
      <select name="a" id="" class="form-select">
        <option value="a" selected>あ</option>
      </select>
    </div>
  </div>
  <div class="col-12">
    <label for="">氏名</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-user"></i
      ></label>
      <select name="" id="" class="form-select"></select>
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
  components: { FormNavigationComponent },
  emits: ["updatePage"],
};
</script>