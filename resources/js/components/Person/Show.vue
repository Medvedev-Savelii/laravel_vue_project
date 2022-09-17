<template>
    <div v-if="person">
        <div>
            Name: {{this.person.name}}
        </div>
        <div>
            Age: {{this.person.age}}
        </div>
        <div>
            Job: {{this.person.job}}
        </div>
        <button type="button" class="btn btn-primary"><router-link class="text-black-50 text-decoration-none" :to="{ name: 'person.edit', params: {id: this.person.id}}">Edit</router-link></button>

    </div>
</template>

<script>
export default {
    name: "Show",
    data() {
        return {
            person: null
        }
    },
    mounted() {
        this.getPerson();
    },
    methods: {
        getPerson() {
            axios.get('/api/people/' + this.$route.params.id)
                .then(res => {
                    this.person = res.data.data
                })
        },
    }
}
</script>

<style scoped>

</style>
