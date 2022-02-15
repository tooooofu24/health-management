<template>
  <div class="card col-md-8">
    <div class="card-body">
      <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
          <button
            :class="[
              'nav-link',
              {
                'active bg-transparent text-success': type == 'class',
                'text-muted': type != 'class',
              },
            ]"
            @click="this.type = 'class'"
          >
            クラスから選ぶ
          </button>
        </li>
        <li class="nav-item">
          <button
            :class="[
              'nav-link',
              {
                'active bg-transparent text-primary': type == 'club',
                'text-muted': type != 'club',
              },
            ]"
            @click="this.type = 'club'"
          >
            部活から選ぶ
          </button>
        </li>
      </ul>
      <div class="row px-4" v-show="type == 'class'">
        <div
          class="col-4 text-center py-2"
          v-for="_class in classes"
          :key="_class.id"
        >
          <a
            :href="'/admin/class/' + _class.id"
            class="btn btn-success"
            style="width: 10rem"
            >{{ _class.grade + "年" + _class.class + "組" }}</a
          >
        </div>
      </div>

      <div class="row px-4" v-show="type == 'club'">
        <div
          class="col-4 text-center py-2"
          v-for="club in clubs"
          :key="club.id"
        >
          <a
            :href="'/admin/club/' + club.id"
            class="btn btn-primary"
            style="width: 10rem"
            >{{ club.name }}</a
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      type: "class",
    };
  },
  props: ["classes", "clubs"],
};
</script>
<style scoped>
.nav-tabs .nav-link.active {
  border-color: #dee2e6 #dee2e6 #fff;
}
</style>
