<template>
    <div id="main-container">
        <h1>Benvenuto, Guest</h1>
        <div class="counter-container">
            <div>
                <button @click="updateCounter('-')">
                    -
                </button>
            </div>
            <div>
                {{ counter }}
            </div>
            <div>
                <button @click="updateCounter('+')">
                    +
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "App",
        components: { },
        data() {
            return {
                counter: 0
            }
        },
        methods: {
            updateCounter(mode) {
                if(mode == '+')
                    this.counter++;
                else
                    this.counter--;
            }
        }
    }
</script>

<style scoped>
    #main-container{
        text-align: center;
    }
    .counter-container{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
</style>
