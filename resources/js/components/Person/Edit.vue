<template>
    <div class="w-25 p-3" v-if="person">
        <div class="mb-3">
            <input type="text" placeholder="name" v-model="person.name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" placeholder="age" v-model="person.age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" placeholder="job" v-model="person.job" class="form-control">
        </div>
        <div class="mb-3">
            <input @click.prevent="$store.dispatch('update', {id: person.id, name: person.name, age: person.age, job: person.job})" type="submit" value="Update" class="btn btn-primary">
        </div>
    </div>
</template>

<script>

export default {
    name: "Edit",
    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },
    computed: {
        person() {
            return this.$store.getters.person
        }
    }
}
</script>

<style scoped>

</style>
