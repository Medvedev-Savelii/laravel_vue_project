<template>
    <div>
        <router-link :to="{name:'person.index'}">People</router-link>
        <router-link class="p-1" :to="{name:'person.create'}">Add</router-link>
        <router-link class="p-1" :to="{name:'person.edit'}">Update</router-link>
        <router-link :to="{name:'person.show'}">Show</router-link>
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
