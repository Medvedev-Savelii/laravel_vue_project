<template>
    <div class="container">

        <CreateComponent></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
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
            parentLog() {
                console.log('This is Parent Component 1');
            }
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
