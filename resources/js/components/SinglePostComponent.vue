<template>
    <div class="container">
        <br/>
        <CreateComponent></CreateComponent>
<!--            <table class="table">-->
<!--               <thead>-->
<!--                <tr>-->
<!--                    <th scope="col">ID</th>-->
<!--                    <th scope="col">Name</th>-->
<!--                    <th scope="col">Age</th>-->
<!--                    <th scope="col">Job</th>-->
<!--                </tr>-->
<!--               </thead>-->
<!--                <tbody>-->
<!--                <tr v-for="person in persons">-->
<!--                        <th scope="row">{{ person.id }}</th>-->
<!--                        <th>{{ person.name }}</th>-->
<!--                        <th>{{person.age}}</th>-->
<!--                        <th>{{person.job}}</th>-->
<!--                </tr>-->
<!--                </tbody>-->
<!--            </table>-->
        </div>
</template>

<script>
    import PostComponent from "./PostComponent.vue";
    import CreateComponent from "./CreateComponent.vue";

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
            CreateComponent
        }
    }

</script>

<style scoped>

</style>
