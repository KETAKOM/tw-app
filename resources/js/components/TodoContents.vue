<template>
    <div id="home">
        <h1>TodoContents</h1>
        <todoList></todoList>
    </div>
</template>

<script>
import todoList from './todo_contents/TodoList.vue'
export default {
    el: '#home',
    name: 'HOME',
    components: {
        todoList,
    }
}
</script>