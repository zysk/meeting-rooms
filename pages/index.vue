<template>
  <v-container>
    <v-row align="center" justify="center">
      <v-col cols="12" lg="8">
        <h1 class="text-h3 font-weight-thin text-center mt-16 mb-8">
          Let's get talking...
        </h1>

        <v-text-field
          v-model="query"
          type="search"
          autocomplete="off"
          placeholder="Who do you want to talk to?"
          prepend-inner-icon="mdi-magnify"
          class="search-bar"
          single-line
          filled
          rounded
        ></v-text-field>
      </v-col>

      <v-col cols="12" md="6">
        <h2 class="text-h5 font-weight-thin my-4">Frequently accessed</h2>
        <MeetingRooms :rooms="rooms" class="my-6 meeting-rooms" />
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import MeetingRooms from '~/components/MeetingRooms.vue'
export default {
  components: { MeetingRooms },

  async asyncData({ $content }) {
    const rooms = await $content()
      .sortBy('frequentlyUsed', 'desc')
      .sortBy('name')
      .limit(8)
      .fetch()

    return { rooms }
  },

  data() {
    return {
      query: '',
    }
  },

  watch: {
    async query() {
      this.rooms = await this.$content()
        .sortBy('frequentlyUsed', 'desc')
        .sortBy('name')
        .limit(8)
        .search(this.query)
        .fetch()
    },
  },
}
</script>

<style lang="scss" scoped>
.search-bar {
  max-width: 584px;
  margin: 0 auto;
}

.meeting-rooms {
  min-height: 368px;
}
</style>
