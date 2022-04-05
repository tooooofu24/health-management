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
        required
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
        required
      >
        <option value="" disabled selected>選択してください</option>
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
    <label for="form_student_id">氏名</label>
    <div class="input-group">
      <label class="input-group-text" for="form_student_id"
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
        <option value="" disabled selected class="d-none">
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
</template>
<script>
import { format } from "date-fns";

export default {
  data: function () {
    return {
      date: format(new Date(), "yyyy-MM-dd"),
      grade_id: "",
      students: [],
      student_id: "",
    };
  },
  watch: {
    grade_id(grade_id) {
      axios
        .get("/api/students", {
          params: { grade_id: grade_id },
        })
        .then((res) => {
          this.students = res.data;
        });
    },
  },
  props: ["classes", "session"],
  mounted() {
    // sessionから値を補完
    this.grade_id = this.session.form?.grade_id ?? "";
    this.student_id = this.session.form?.student_id ?? "";
  },
};
</script>