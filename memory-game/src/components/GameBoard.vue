<template>
  <div class="board">
    <div class="found-a-match" v-if="message">{{ message }}</div>
    <div class="container">
      <div class="row">
        <GameCard
          
          v-for="card in cards"
          :key="card.id"
          :card="card"
          @card-flipped="handleCardFlipped"
        />
      </div>
      <button v-if="showPlayAgainButton" @click="resetGame" class="btn btn-primary d-flex justify-content-center mt-3">Play again?</button>
    </div>
  </div>
</template>


<script>
import GameCard from './GameCard.vue';

export default {
  name: 'GameBoard',
  components: {
    GameCard
  },
  data() {
    return {
      cards: this.generateCards(),
      flippedCards: [],
      matchedCards: [],
      message: '',
      showPlayAgainButton: false // visibility of the 'play again' button
    };
  },
  methods: {
    generateCards() {

      let cards = [
        { id: 1, frontImage: require('@/assets/img/1.jpg'), isFlipped: false },
        { id: 2, frontImage: require('@/assets/img/2.jpg'), isFlipped: false },
        { id: 3, frontImage: require('@/assets/img/3.jpg'), isFlipped: false },
        { id: 4, frontImage: require('@/assets/img/4.jpg'), isFlipped: false },
        { id: 5, frontImage: require('@/assets/img/6.jpg'), isFlipped: false },
        { id: 6, frontImage: require('@/assets/img/7.jpg'), isFlipped: false }
      ];
      cards = cards.concat(cards.map(card => ({ ...card, id: card.id + 2 }))); // Create pairs and shuffle
      return cards.sort(() => Math.random() - 0.5); // Shuffle
    },
    handleCardFlipped(card) {
      if (!card.isFlipped && this.flippedCards.length < 2) {
        card.isFlipped = true;  // flip only the selected card
        this.flippedCards.push(card);
        if (this.flippedCards.length === 2) {
          if (this.flippedCards[0].frontImage === this.flippedCards[1].frontImage) {
            this.matchedCards.push(...this.flippedCards);
            this.message = 'A match!'; // the message when a match is found
            setTimeout(() => {
              if (this.matchedCards.length === this.cards.length) {
                this.message = 'Game complete!'; // when all matches are found
                this.showPlayAgainButton = true; // show the play again button
              } else {
                this.message = ''; // clear the match message after 2 seconds
              }
            }, 1000);
            this.flippedCards = [];
          } else {
            setTimeout(() => {
              this.resetFlippedCards();
            }, 1000);  // reset cards after 1 second if they don't match
          }
        }
      }
    },
    resetFlippedCards() {
      this.flippedCards.forEach(card => {
        card.isFlipped = false;  // flip back non-matched cards
      });
      this.flippedCards = [];
      if (this.matchedCards.length !== this.cards.length) {
        this.message = ''; // clear the message if the game is not complete
      }
    },
    resetGame() {
      this.cards = this.generateCards();
      this.flippedCards = [];
      this.matchedCards = [];
      this.message = '';
      this.showPlayAgainButton = false;
    }
  }
};
</script>

<style scoped>
.found-a-match {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  padding: 20px;
  border-radius: 10px;
  text-align: center;
  z-index: 1000;
  text-shadow:  0 4px 8px rgba(0, 0, 0, 0.616);
  font-size: 50px;
  font-weight: 900;
}

.board {
  position: relative;
  max-width: 608px;
  /* background: #fff;
  border: 15px solid #fff;
  border-radius: 20px; */
}


</style>