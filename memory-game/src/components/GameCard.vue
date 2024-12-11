<template>
  <div class="col-4 col-md-3 m-0 d-flex justify-content-center align-items-center p-1">
    <div class="boardcard" @click="flipCard">
      <div class="card-inner" :class="{ 'flipped': card.isFlipped }">
        <div class="card-front">
          <img :src="card.frontImage" alt="Card Front">
        </div>
        <div class="card-back">
          <img src="@/assets/img/5.jpg" alt="Card Back">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'GameCard',
  props: ['card'],
  methods: {
    flipCard() {
      if (!this.card.isFlipped) {
        console.log('Card before flipping:', this.card);
        this.$emit('card-flipped', this.card);
        console.log('Card after flipping:', this.card);
      }
    }
  }
};
</script>

<style scoped>
.boardcard {
  width: 150px;
  height: 150px;
  perspective: 1000px;
}
.card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
}
.card-inner.flipped {
  transform: rotateY(180deg);
}
.card-front, .card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}
.card-front {
  transform: rotateY(180deg);
  z-index: 2;
}
.card-back {
  z-index: 1;
}
.boardcard img {
  height: 100%;
  width: 100%;
}


</style>
