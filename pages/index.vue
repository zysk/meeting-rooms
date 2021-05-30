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
        <v-toolbar class="px-0" flat>
          <v-toolbar-title class="text-h5 font-weight-thin ml-n4">
            Meeting rooms:</v-toolbar-title
          >

          <v-spacer></v-spacer>

          <v-select
            v-model="selectedFilter"
            :items="filters"
            item-text="name"
            item-value="key"
            menu-props="auto"
            label="Filter rooms"
            hide-details
            prepend-icon="mdi-filter"
            single-line
            class="rooms-filter text-body-2"
          ></v-select>
        </v-toolbar>

        <MeetingRooms :rooms="rooms" class="meeting-rooms" />
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
      filters: [
        {
          name: 'Frequently Accessed',
          key: 'frequentlyUsed',
        },
        { name: 'Sort A to Z', key: 'asc' },
        { name: 'Sort Z to A', key: 'desc' },
      ],
    }
  },

  computed: {
    selectedFilter: {
      get() {
        return this.$route.query.filter
      },
      set(value) {
        this.$router.push({
          path: '/',
          query: Object.assign({}, this.$route.query, { filter: value }),
        })
      },
    },
  },

  watch: {
    query() {
      this.getMeetingRooms(this.query, this.$route.query.filter)
    },

    '$route.query'() {
      this.getMeetingRooms(this.query, this.$route.query.filter)
    },
  },

  created() {
    this.getMeetingRooms(this.query, this.$route.query.filter)
  },

  methods: {
    async getMeetingRooms(searchQuery = '', filter = '') {
      this.rooms = await this.$content()
        .sortBy(filter === 'frequentlyUsed' ? 'frequentlyUsed' : '', 'desc')
        .sortBy(
          'name',
          filter !== 'frequentlyUsed' && filter === 'asc' ? 'asc' : 'desc'
        )
        .search(searchQuery)
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

.rooms-filter {
  max-width: 240px;
}
</style>
