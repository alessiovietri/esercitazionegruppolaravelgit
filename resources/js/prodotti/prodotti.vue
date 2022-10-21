<template>
    <main>
        <div>
            <h2>
                Categorie
            </h2>
            <ul class="categories">
                <li v-for="(category, index) in categories" :key="index">
                    {{ category.name }}
                </li>
            </ul>
        </div>
        <div>
            <h2>
                Prodotti
            </h2>
            <div class="products-container">
                <div v-for="(prodotto, index) in prodotti" :key="index">
                    <h3>
                        {{ prodotto.name }}
                    </h3>
                    <div>
                        <span>
                            € {{ prodotto.price }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="links-container">
                <div>
                    <button :disabled="!prevPage || loadingProducts" @click="changePage('-')">
                        < Precedente
                    </button>
                </div>
                <div>
                    <button :disabled="!nextPage || loadingProducts" @click="changePage('+')">
                        Successiva >
                    </button>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "prodotti",

    data() {
        return {
            categories: [],
            prodotti: [],
            loadingProducts: false,
            currentPage: 1,
            prevPage: null,
            nextPage: null
        };
    },
    methods: {
        getCategories() {
            axios.get("/api/categories").then((response) => {
                this.categories = response.data.results;
            });
        },
        changePage(mode) {
            switch (mode) {
                case '-':
                    this.currentPage = this.prevPage;
                    break;

                case '+':
                    this.currentPage = this.nextPage;
                    break;
            }

            this.getProducts();
        },
        getProducts() {
            this.loadingProducts = true;

            axios.get("/api/products", {
                params: {
                    page: this.currentPage
                }
            }).then((response) => {
                this.prodotti = response.data.results.data;

                if(response.data.results.prev_page_url){
                    this.prevPage = this.currentPage - 1;
                }
                else{
                    this.prevPage = null;
                }

                if(response.data.results.next_page_url){
                    this.nextPage = this.currentPage + 1;
                }
                else{
                    this.nextPage = null;
                }

                this.loadingProducts = false;
            });
        },
    },

    mounted() {
        this.getCategories();
        this.getProducts();
    },
};
</script>

<style lang="scss" scoped>
    main{
        display: flex;
        text-align: left;

        .categories{
            > li{
                transition: all .2s ease-in-out;
                padding: 2px 4px;

                &:hover{
                    cursor: pointer;
                    background-color: blue;
                    color: white;
                }
            }
        }

        > div:first-of-type{
            width: 20%;
        }

        > div:last-of-type{
            width: 80%;

            .products-container{
                display: flex;
                flex-wrap: wrap;

                > div{
                    width: 25%;
                    border: 1px solid black;
                    padding: 15px;
                }
            }

            .links-container{
                display: flex;

                > div{
                    width: 50%;
                    padding: 5px;

                    &:first-of-type{
                        text-align: right;
                    }
                }
            }
        }
    }
</style>
