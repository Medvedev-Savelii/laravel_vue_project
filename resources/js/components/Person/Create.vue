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
            <input type="submit" value="Add" class="btn btn-primary">
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
}
</script>

<style scoped>

</style>
