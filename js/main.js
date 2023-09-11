'use strict'

const { createApp } = Vue

const app = createApp({
  data() {
    return {
      cards: [],
    }
  },
  mounted() {
    axios.get("api/cards.php").then((response) => {
      this.cards = response.data;
    })
  }
}).mount('#app')