<template>
   <div class="w-25">
       <div><h1>Color: {{obj.color}}</h1></div>
       <div><h1>Number: {{obj.number > 10 ? 'More' : 'Not'}}</h1></div>
       <div><h1>Is Published: {{obj.isPublished ? "Yes" : "No"}}</h1></div>
   </div>
</template>

<script>
    export default {
        mounted() {
            this.$parent.$parent.parentLog();
        },

        data() {
            return {

            }
        },

        props: [
            'obj'
        ],

        methods: {

        }

    }

</script>

<style scoped>

</style>
