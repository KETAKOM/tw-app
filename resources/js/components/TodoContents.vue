<template>
    <div id="home">
        <h1>TodoContents</h1>
        <ul>
        <li v-for="item in posts" :key="item.id">{{item}}</li>
        </ul>
        <router-view name="todoList" :posts="this.posts"/>
    </div>
</template>

<script>
export default {
    props: ['posts'],
}
</script>