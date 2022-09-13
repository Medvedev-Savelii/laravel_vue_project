<template>
    <div class="container">

        <CreateComponent></CreateComponent>
        <IndexComponent></IndexComponent>
    </div>
</template>

<script>
    import PostComponent from "./PostComponent.vue";
    import CreateComponent from "./CreateComponent.vue";
    import IndexComponent from "./IndexComponent.vue";
    import axios from "axios";

    export default {
        mounted() {

        },


        data() {

        },

        methods:{

        },

        computed: {

        },

        components: {
            PostComponent,
            CreateComponent,
            IndexComponent
        }
    }

</script>

<style scoped>

</style>
