<template>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a class="col-md-2" href="#">
          twitter風
          <!-- <img class="header-icon" src="../assets/images/logo.jpg" alt="アイコン">Twitter風 -->
        </a>
        <a class="col-md-2" href="#">
          モーメント
          <!-- <img class="header-icon" src="../assets/images/logo.jpg" alt="アイコン">モーメント -->
        </a>
      </div>
      <div class="col-md-8 input-group">
        <input type="text" class="form-control col-md-4">
        <span class="input-group-btn  col-md-3">
          <button class="btn btn-primary" type="submit">
            <i class='glyphicon glyphicon-search'></i>search
          </button>
        </span>
        <a href="/login" class="col-md-5">
          <small>アカウントをお持ちの場合</small>ログイン
        </a>
      </div>
    </div> 
  </div>
</template>

<script>
export default {
  name: 'Header',
  data () {
    return {

    }
  }
}
</script>

<style>
.container {
    padding-right: 15px;
    padding-left: 15px;
    padding-right: 0px;
    padding-left: 0px;
    
}
</style>