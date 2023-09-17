<template>
    <h1>хуй собаки</h1>
    <div v-for="task in tasks" :key="task.id">
        <span>{{ task.id }}</span>
        <span>{{ task.name }}</span>
        <span>{{ task.priorities[0].name }}</span>
    </div>
</template>

<style scoped>

</style>

<script>
export default {
    props: {
        tasks: Object,
    }
}
</script>
