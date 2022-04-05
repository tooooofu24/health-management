<template>
  <div class="col-12">
    <label for="form_date">回答する日付</label>
    <div class="input-group">
      <label class="input-group-text" for="form_date"
        ><i class="fa-solid fa-calendar"></i
      ></label>
      <input
        type="date"
        class="form-control"
        name="date"
        id="form_date"
        v-model="date"
      />
    </div>
  </div>
  <div class="col-12">
    <label for="form_grade_id">クラス</label>
    <div class="input-group">
      <label class="input-group-text" for="form_grade_id"
        ><i class="fa-solid fa-school"></i
      ></label>
      <select
        name="grade_id"
        id="form_grade_id"
        class="form-select"
        v-model="grade_id"
      >
        <option :value="null" disabled selected class="d-none">
          選択してください
        </option>
        <option
          v-for="classRoom in classes"
          :key="classRoom.id"
          :value="classRoom.id"
        >
          {{ classRoom.name }}
        </option>
      </select>
    </div>
  </div>
  <div class="col-12">
    <label for="">氏名</label>
    <div class="input-group">
      <label class="input-group-text" for=""
        ><i class="fa-solid fa-user"></i
      ></label>
      <select
        name="student_id"
        id="form_student_id"
        class="form-select"
        required
        :disabled="!grade_id"
        v-model="student_id"
      >
        <option :value="null" disabled selected class="d-none">
          選択してください
        </option>
        <option
          v-for="student in students"
          :key="student.id"
          :value="student.id"
        >
          {{ student.name }}
        </option>
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
import { format } from "date-fns";

export default {
  data: function () {
    return {
      page: 1,
      date: format(new Date(), "yyyy-MM-dd"),
      grade_id: null,
      students: [],
      student_id: null,
    };
  },
  watch: {
    grade_id(grade_id) {
      axios
        .get("/api/students", {
          params: { grade_id: grade_id },
        })
        .then((res) => {
          console.log(res.data);
          this.students = res.data;
        });
    },
  },
  methods: {
    updatePage(num) {
      this.$emit("updatePage", num);
    },
  },
  components: { FormNavigationComponent },
  emits: ["updatePage"],
  props: ["classes"],
};
</script>