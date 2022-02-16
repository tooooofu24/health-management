<template>
  <nav
    class="
      navbar navbar-expand-md navbar-light
      bg-white
      shadow-sm
      position-fixed
      w-100
    "
    style="z-index: 2; top: 0"
  >
    <div class="container">
      <span class="navbar-brand mb-0 fs-6 text-muted">{{ title }}</span>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="toggle"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a
              href="/form"
              class="nav-link"
              data-bs-toggle="tooltip"
              data-bs-placement="bottom"
              title="フォームで回答する"
              @mouseover="google_is_active = true"
              @mouseleave="google_is_active = false"
              target="_blank"
              ><i
                :class="[
                  'fa-lg',
                  {
                    'fa-brands fa-google': !google_is_active,
                    'fa-solid fa-pencil': google_is_active,
                  },
                ]"
              ></i
            ></a>
          </li>
          <li class="nav-item" v-show="!user">
            <a
              href="/login"
              class="nav-link"
              data-bs-toggle="tooltip"
              data-bs-placement="bottom"
              title="ログイン"
              @mouseover="login_is_active = true"
              @mouseleave="login_is_active = false"
              ><i
                :class="[
                  {
                    'fa-xl fa-solid fa-right-to-bracket': !login_is_active,
                    'fa-xl fa-solid fa-person-walking': login_is_active,
                  },
                ]"
              ></i
            ></a>
          </li>
          <li class="nav-item" v-show="user">
            <a
              href="/logout"
              @click.prevent="logout()"
              class="nav-link"
              data-bs-toggle="tooltip"
              data-bs-placement="bottom"
              title="ログアウト"
              @mouseover="logout_is_active = true"
              @mouseleave="logout_is_active = false"
              ><i
                :class="[
                  'fa-solid fa-lg',
                  {
                    'fa-door-closed': !logout_is_active,
                    'fa-door-open': logout_is_active,
                  },
                ]"
              ></i
            ></a>
            <form
              id="logout-form"
              action="/logout"
              method="POST"
              class="d-none"
            >
              <input type="hidden" name="_token" :value="csrf" />
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  data: function () {
    return {
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
      login_is_active: false,
      logout_is_active: false,
      google_is_active: false,
    };
  },
  methods: {
    logout() {
      document.getElementById("logout-form").submit();
    },
  },
  computed: {},
  mounted: function () {},
  props: ["user", "title"],
};
</script>
<style scoped>
i {
  width: 2rem;
  text-align: center;
}
</style>