<template>
  <div class="todoList">
    <span>TODOLIST</span>
    <ul>
        <li v-for="item in posts" :key="item.id">{{item.text}}</li>
        </ul>
  </div>
</template>

<script>
export default {
    props: ['posts']
}
</script>