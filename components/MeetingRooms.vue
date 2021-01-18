<template>
  <v-row>
    <v-col v-for="room in rooms" :key="room.name" cols="6" sm="4" md="4" lg="3">
      <v-card hover ripple :href="room.googleMeet" target="_blank">
        <v-img
          :src="room.profileImage"
          class="white--text align-end"
          gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
          height="160px"
        >
          <v-card-title
            class="text-subtitle-2"
            v-text="room.name"
          ></v-card-title>
        </v-img>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  props: {
    rooms: {
      type: Array,
      required: true,
    },
  },
}
</script>

<style></style>
