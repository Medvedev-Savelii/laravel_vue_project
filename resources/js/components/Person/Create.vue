<template>
    <div class="w-25 p-3">
        <div class="mb-3">
            <input type="text" placeholder="name" v-model="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" placeholder="age" v-model="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" placeholder="job" v-model="job" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('store', {name: name, age: age, job: job})" type="submit" value="Add" class="btn btn-primary">
        </div>
    </div>
</template>

<script>
export default {
    name: "Create",
    data() {
        return {
            name: '',
            age: null,
            job: null
        }
    },
    computed: {
        isDisabled() {
            return this.name && this.age && this.job
        }
    }
}
</script>

<style scoped>

</style>
