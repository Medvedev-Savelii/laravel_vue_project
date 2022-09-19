<template>
    <div class="w-50 p-3" v-if="people">
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
                    <a @click.prevent="$store.dispatch('deletePerson', person.id)" href="#" class="btn btn-outline-danger">Delete</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

export default {
    name: "Index",
    mounted() {
        this.$store.dispatch('getPeople')
    },
    computed: {
        people() {
            return this.$store.getters.people
        }
    },
}
</script>


