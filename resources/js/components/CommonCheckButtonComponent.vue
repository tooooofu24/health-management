<template>
  <div>
    <button class="btn btn-success px-3" v-if="!checked" @click="check()">
      承認
    </button>
    <button class="btn btn-success" disabled v-if="checked">承認済</button>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      checked: false,
      toast: null,
    };
  },
  methods: {
    check: function () {
      this.checked = true;
      this.toast.show();
      axios.post("/api/check/" + this.id).then((res) => {});
    },
  },
  mounted: function () {
    var el = document.getElementById("toast");
    var toast = new bootstrap.Toast(el);
    this.toast = toast;
  },
  props: ["id"],
};
</script>
