<template>
    <div class="w-50 p-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in people">
                <td>
                    <router-link class="text-dark text-decoration-none" :to="{name: 'person.show', params: {id: person.id}}">{{person.name}}</router-link>
                </td>
                <td>{{person.age}}</td>
                <td>{{person.job}}</td>
                <td>
                    <button type="button" class="btn btn-primary"><router-link class="text-light text-decoration-none" :to="{ name: 'person.edit', params: {id: person.id}}">Edit</router-link></button>
                </td>
                <td>
                    <a href="#" class="btn btn-outline-danger" @click.prevent="deletePerson(person.id)">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Index",

    data() {
        return {
             people: null
        }
    },
    mounted() {
        this.getPeople();
    },
    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data.data
                })
        },
        deletePerson(id) {
            axios.delete('/api/people/' + id)
                .then(res => { this.getPeople()})
                .catch(error => console.log(error))
        }
    }
}
</script>

<style scoped>

</style>
