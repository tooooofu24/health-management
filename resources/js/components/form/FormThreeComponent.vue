<template>
  <div class="col-12">
    <label for="">咳はありますか？</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-head-side-cough"></i
      ></label>
      <select name="" id="" class="form-select" required>
        <option value="1">はい</option>
        <option value="0" selected>いいえ</option>
      </select>
    </div>
  </div>
  <div class="col-12">
    <label for="">息苦しさはありますか？</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-head-side-mask"></i
      ></label>
      <select name="" id="" class="form-select" required>
        <option value="1">はい</option>
        <option value="0" selected>いいえ</option>
      </select>
    </div>
  </div>
  <div class="col-12">
    <label for="">だるさはありますか？</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-face-tired"></i
      ></label>
      <select name="" id="" class="form-select" required>
        <option value="1">はい</option>
        <option value="0" selected>いいえ</option>
      </select>
    </div>
  </div>
  <div class="col-12">
    <label for="">食欲の減退はありますか？</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-face-frown"></i
      ></label>
      <select name="" id="" class="form-select" required>
        <option value="1">はい</option>
        <option value="0" selected>いいえ</option>
      </select>
    </div>
  </div>
  <div class="col-12">
    <label for="">通院していますか？</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-hospital"></i
      ></label>
      <select name="" id="" class="form-select" required>
        <option value="1">はい</option>
        <option value="0" selected>いいえ</option>
      </select>
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