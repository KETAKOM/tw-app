<template>
<div class="container">
    <div class="row">
      <div class="profile-bar col-md-10 text-center">
        <a class="col-md-2">ツイート：500</a>
        <a class="col-md-2">フォロー：500</a>
        <a class="col-md-2">フォロワー：500</a>
        <a class="col-md-2">いいね：500</a>
        <button type="button" class="btn btn-primary col-md-2">フォローする</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ProfileBar',
  data () {
    return {

    }
  }
}
</script>

<style>
/* .container {
    padding-right: 15px;
    padding-left: 15px;
    padding-right: 0px;
    padding-left: 0px;
    
} */
</style>