<template>
    <div class="twiitList">
        <div class="container">
            <div class="row">
                <div class="twiitlist-container">
                    <ul>
                        <li class="twiit-contents" v-for="post in posts" :key="post.id">
                            <div>
                                <div class="twiit-header">
                                    {{post.user_name}}
                                </div>
                                <div class="twiit-body">
                                    {{post.text}}
                                </div>
                                <div class="twiit-fotter">
                                    <div>
                                        <button class="twiit-fotter-btn btn btn-primary" onclick="alert('コメント')">
                                            <i class='glyphicon glyphicon-search'></i>コメント
                                        </button>
                                        <button class="twiit-fotter-btn btn btn-primary" onclick="alert('リツイート')">
                                            <i class='glyphicon glyphicon-search'></i>リツイート
                                        </button>
                                        <button class="twiit-fotter-btn btn btn-primary" onclick="alert('お気に入り')">
                                            <i class='glyphicon glyphicon-search'></i>お気に入り
                                        </button>
                                        <button class="twiit-fotter-btn-l btn btn-primary" onclick="alert('DM')">
                                            <i class='glyphicon glyphicon-search'></i>DM
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="loader text-center" v-show="!call_flg&&last_flg"><span>Now loading{{page}}......</span></div>
                            <div class="loader text-center" v-show="!last_flg"><span>First twiit{{page}}......</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['user_id', 'posts'],
    data: function () {
        return {
            call_flg: true,
            last_flg: true,
            page: 2,
        }
    },
    created: function() {
    },
    mounted: function(){
        window.addEventListener('scroll', this.handleScroll);
    },
    methods: {
        handleScroll: function(event) {
            if (this.call_flg) {
                //ページの一番下までスクロールされた時にイベントを発火する
                var doch = $(document).innerHeight(); //ページ全体の高さ
                var winh = $(window).innerHeight(); //ウィンドウの高さ
                var bottom = doch - winh; //ページ全体の高さ - ウィンドウの高さ = ページの最下部位置

                // ページの最下部までスクロールされたら実行する
                if (bottom <= $(window).scrollTop()) {
                    this.callApi()
                }
            }
        },
        callApi: function() {
            this.call_flg = false;
            if (this.last_flg) {
                axios.get('/api/post/get?user_id='+this.user_id+'&page='+this.page)
                .then(response => (
                        this.page++,
                        this.addPosts(response["data"]["posts"]["data"])
                    )
                )
            }
        },
        addPosts: function(arr) {
            if (arr.length == 0) {
                this.call_flg = true
                this.last_flg = false
            } else {
                this.call_flg = true
                arr.filter(post => {
                    this.posts.push(post)
                })
            }
        }
    }
}
</script>

<style>
    /* .twiitList{
        
    } */
    .twiitlist-container{
        width:100%;
    }
    .twiit-contents{
        height: 300px;
        margin:5px 2px 5px 2px;
    }

    .twiit-header{
        height: 30px;
    }

    .twiit-body{
        height: 200px;
    }

    .twiit-fotter{
        height: 70px;
    }

    ul {
        list-style: none;
        padding-right: 40px;
        padding-left: 40px;
    }

    ul li:first-child{
        border-top-style:solid;
        border-top-color:lightyellow;
        border-top-width: 2px;
    }

    li{
        background-color: white;
        border-bottom-style:solid;
        border-bottom-color:lightyellow;
        border-bottom-width: 2px;
    }

    .twiit-fotter-btn{
        float:left;
    }
    .twiit-fotter-btn-l{
        float:both;
    }
</style>