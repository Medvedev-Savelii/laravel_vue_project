<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Single Post Component</div>
                    <div class="card-body">
                        Name: {{name}}
                    </div>
                    <button @click="sayHello">Hello</button>
                    <button @click="myName">Name</button>
                </div>
            </div>
        </div>
        <br/>
        <PostComponent/>
    </div>
</template>

<script>
    import PostComponent from "./PostComponent.vue";

    export default {
        mounted() {
            console.log('Component mounted.')
        },


        data() {
            return {
                name: "Sava",
                age: 24,
            }
        },

        methods:{
            sayHello() {
                console.log("Hello Sava")
            },
            myName() {
                console.log("Sava")
            }
        },


        components: {
            PostComponent
        }
    }

</script>

<style scoped>

</style>
