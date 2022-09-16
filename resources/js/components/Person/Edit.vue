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
            <input @click.prevent="update" type="submit" value="Update" class="btn btn-primary">
        </div>
    </div>
</template>

<script>
import router from "../../router";

export default {
    name: "Edit",
    data() {
        return {
            name: '',
            age: null,
            job: null
        }
    },

    mounted() {
        this.getPerson();
    },
    methods: {
        getPerson() {
            axios.get('/api/people/' + this.$route.params.id)
                .then(res => {
                    this.name = res.data.name
                    this.age = res.data.age
                    this.job = res.data.job
                })
                .catch(error => console.log(error))
        },
        update() {
            axios.patch('/api/people/' + this.$route.params.id, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    router.push({name: 'person.show'})
                })
        }
    },
}
</script>

<style scoped>

</style>
