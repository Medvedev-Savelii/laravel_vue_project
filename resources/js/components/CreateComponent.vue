<template>
   <div class="w-25">
       <div class="form-group mb-3">
           <input type="text" class="form-control" id="name" placeholder="name" v-model="name">
       </div>
       <div class="form-group  mb-3">
           <input type="number" class="form-control" id="age" placeholder="age" v-model="age">
       </div>
       <div class="form-group  mb-3">
            <input type="text" class="form-control" id="job" placeholder="job" v-model="job">
       </div>
       <div class="form-group  mb-3">
           <input @click.prevent="addPerson" class="btn btn-primary" value="Добавить">
       </div>
   </div>
    <SomeComponent :obj="obj"></SomeComponent>

</template>

<script>
import SomeComponent from "./SomeComponent.vue";
    export default {
        mounted() {
            this.$parent.$refs.index.indexLog();
        },

        data() {
            return {
                name: null,
                age: null,
                job: null,
                obj: {
                    color: 'Red',
                    number: 24,
                    isPublished: true
                }
            }
        },

        methods: {
            addPerson() {
                axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
                    .then(res => {
                        this.name = null
                        this.age = null
                        this.job = null
                        console.log(res)
                    })
            }
        },
        components: {
            SomeComponent
        }

    }

</script>

<style scoped>

</style>
