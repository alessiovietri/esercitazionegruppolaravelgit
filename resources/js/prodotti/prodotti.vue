<template>
    <dir>
        <ul>
            <li v-for="(prodotto, index) in prodotti" :key="index">
                {{ prodotto }}

            </li>
        </ul>

    </dir>
    
</template>

<script>
export default {
    name: 'prodotti',

    data() {
        return {
            prodotti:[

                
            ]
            
        }
    },
   methods:{
    getProducts(){
        axios.get('/api/products').then ((response)=>{ 

            this.prodotti = response.data.results.data
        })
        } 
    },

    mounted(){
        this.getProducts();
    }
}
</script>

