<template>
  <v-app>
    <v-app-bar
      color="white"
      elevate-on-scroll
      height="96"
      scroll-target="#scrolling-techniques-7"
    >
      <v-toolbar-title>
        <img
          class="logo px-4 mt-4"
          src="@/assets/images/ZyskLogo.svg"
          alt="zysk-logo"
        />
      </v-toolbar-title>

      <v-spacer></v-spacer>

      <v-btn icon>
        <v-icon>mdi-star</v-icon>
      </v-btn>

      <v-btn icon>
        <v-icon>mdi-information</v-icon>
      </v-btn>
    </v-app-bar>

    <Nuxt id="scrolling-techniques-7" />

    <v-footer color="secondary lighten-1" padless>
      <v-row justify="center" no-gutters>
        <v-btn
          v-for="link in links"
          :key="link"
          color="white"
          text
          rounded
          class="my-2"
        >
          {{ link }}
        </v-btn>
        <v-col
          class="secondary lighten-2 py-4 text-center white--text"
          cols="12"
        >
          {{ new Date().getFullYear() }} — <strong>Zysk Technologies</strong>
        </v-col>
      </v-row>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  data() {
    return {
      links: ['Home', 'Services', 'Contact Us'],
    }
  },
}
</script>

<style>
body {
  border: 0.5rem solid #ff4b4b;
  border-bottom: 0;
}

.logo {
  max-width: 100%;
}
</style>
