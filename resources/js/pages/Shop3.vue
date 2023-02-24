<script setup>
import axios from "axios";
</script>
<template>
    <div>
        <ul>
            <li v-for="(data, index) in products" :key="index">
                {{ data.product_name }}
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    data() {
        return {
            products: [],
            // items: [{ message: "Foo" }, { message: "Bar" }],
        };
    },
    methods: {
        productData() {
            axios.get("/products").then((response) => {
                this.products = response.data;
                console.log(response.data);
            });
        },
    },
    mounted() {
        this.productData();
    },
};
</script>
