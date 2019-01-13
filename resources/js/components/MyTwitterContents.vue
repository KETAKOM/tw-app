<template> 
    <div id="home">
        <h2>MyitterContents</h2>
        <router-view name="Header"/>
        <router-view class="main col-md-3" name="ProfileCard"/>
        <router-view class="main col-md-6" name="TwittList" :posts="this.posts"/>
        <router-view class="main col-md-3" name="SideBar"/>
        <div class="col-md-12 clear-bar"></div>
    </div>
</template>

<script>
export default {
    props: ['posts'],
}
</script>


<style>
    .main{
        margin-top:1%;
        float: left;
    }
    .clear-bar{
        clear:both;
    }
</style>