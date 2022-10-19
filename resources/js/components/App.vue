<template>
    <div id="main-container">
        <h1>Benvenuto, Guest</h1>

        <prodotti/>
        
        
    </div>
</template>

<script>

import prodotti from '../prodotti/prodotti.vue'
    export default {
        name: "App",
        components: { 
            prodotti 
        },
       
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
