<template>
    <div>
        <router-link :to="{name:'person.index'}">People</router-link>
        <router-link class="p-1" :to="{name:'person.create'}">Add</router-link>
        <router-link class="p-1" :to="{name:'person.edit',params: {id: 'id'}}">Update</router-link>
        <router-link :to="{name:'person.show', params: {id: 'id'}}">Show</router-link>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "index"
}
</script>

<style scoped>

</style>
