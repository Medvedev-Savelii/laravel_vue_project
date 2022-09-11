<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Single Post Component</div>
                    <div class="card-body">

                    </div>

                </div>
            </div>
        </div>
        <br/>
        <PostComponent></PostComponent>
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
            PostComponent
        }
    }

</script>

<style scoped>

</style>
