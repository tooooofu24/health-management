<template>
  <div class="d-flex justify-content-between mt-3 align-items-center">
    <div
      :data-bs-toggle="page <= 1 ? 'tooltip' : null"
      :title="page <= 1 ? '戻れません' : null"
    >
      <button
        type="button"
        class="btn btn-sm btn-outline-secondary"
        @click="updatePage(page - 1)"
        :disabled="page <= 1"
      >
        <i class="fa-solid fa-angle-left me-2"></i>前へ
      </button>
    </div>
    <div class="text-muted">{{ page }} / 4</div>
    <div>
      <button
        type="button"
        class="btn btn-sm btn-outline-secondary"
        @click="updatePage(page + 1)"
        v-if="page < 4"
      >
        次へ<i class="fa-solid fa-angle-right ms-2"></i>
      </button>
      <button type="submit" class="btn btn-sm btn-primary" v-if="page == 4">
        <i class="fa-solid fa-paper-plane me-2"></i>送信
      </button>
    </div>
  </div>
</template>
<script>
export default {
  methods: {
    updatePage(num) {
      this.$emit("updatePage", num);
    },
  },
  props: ["page"],
  emits: ["updatePage"],
};
</script>