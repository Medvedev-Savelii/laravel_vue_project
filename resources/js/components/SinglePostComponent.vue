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
            <table class="table">
               <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Job</th>
                </tr>
               </thead>
                <tbody>
                <tr v-for="person in personsAge">
                        <th scope="row">{{ person.id }}</th>
                        <th>{{ person.name }}</th>
                        <th>{{person.age}}</th>
                        <th>{{person.job}}</th>
                </tr>
                </tbody>
            </table>
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
                persons: [
                    {
                        id: 1,
                        name: 'Oksana',
                        age: 50,
                        job: 'Realtor'
                    },
                    {
                        id: 2,
                        name: 'Zahara',
                        age: 21,
                        job: 'Student'
                    },
                    {
                        id: 3,
                        name: 'Dmitriy',
                        age: 33,
                        job: 'Secure'
                    },
                    {
                        id: 4,
                        name: 'Ganesha',
                        age: 17,
                        job: 'Pick'
                    },{
                        id: 5,
                        name: 'Igor',
                        age: 5,
                        job: 'Baby'
                    },
                ]
            }
        },

        methods:{

        },

        computed: {
            personsAge() {
                return this.persons.filter(function (person) {
                    return person.age > 20
                })
            }
        },

        components: {
            PostComponent
        }
    }

</script>

<style scoped>

</style>
