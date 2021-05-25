<template>
  <v-container>
    <v-row align="center" justify="center">
      <v-col cols="12" lg="8" align="center" justify="center">
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
        <h2 class="text-h5 font-weight-thin my-4">Meeting rooms:</h2>
        <MeetingRooms :rooms="rooms" class="my-6 meeting-rooms" />
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import MeetingRooms from '~/components/MeetingRooms.vue'
export default {
  components: { MeetingRooms },

  data() {
    return {
      query: '',
      rooms: [],
    }
  },

  watch: {
    query() {
      this.getMeetingRooms(this.query)
    },
  },

  created() {
    this.getMeetingRooms()
  },

  methods: {
    async getMeetingRooms(query = '') {
      this.rooms = await this.$content()
        .sortBy('frequentlyUsed', 'desc')
        .sortBy('name')
        .search(query)
        .limit(8)
        .fetch()
    },
  },
}
</script>

<style lang="scss" scoped>
.search-bar {
  max-width: 584px;
}

.meeting-rooms {
  min-height: 368px;
}
</style>
