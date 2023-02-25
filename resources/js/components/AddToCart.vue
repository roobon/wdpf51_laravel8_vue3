<template>
    <li>
        <a href="#" @click.prevent="addProducttoCart"
            ><i class="fa fa-shopping-cart"></i
        ></a>
    </li>
</template>
<script>
import axios from "axios";

export default {
    props: ["pr_id"],
    methods: {
        addProducttoCart() {
            //alert("Your Product ID: " + this.pr_id);
            axios.post("/cart", { prid: this.pr_id }).then((response) => {
                console.log(response.data);
            });
        },
    },
};
</script>
