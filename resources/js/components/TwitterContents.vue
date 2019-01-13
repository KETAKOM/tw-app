<template>
    <div id="home">
        <h1>TwitterContents</h1>
        <profile_card></profile_card>
    </div>
</template>

<script>
import profile_card from './twitter_contents/ProfileCard.vue'
export default {
    el: '#home',
    name: 'HOME',
    components: {
        profile_card,
    }
}
</script>