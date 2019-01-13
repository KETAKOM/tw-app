<template>
    <div class="twiitList">
        <div class="container">
            <div class="row">
                <div class="twiitlist-container">
                    <ul>
                        <li class="twiit-contents col-md-5" v-for="post in posts" :key="post.id">
                            <div>
                                <div class="twiit-header">
                                    {{post.user_name}}
                                </div>
                                <div class="twiit-body">
                                    {{post.text}}
                                </div>
                                <div class="twiit-fotter">
                                    <div>
                                        <input type="button" onclick="alert('コメント')" value="コメント">
                                        <input type="button" onclick="alert('リツイート')" value="リツイート">
                                        <input type="button" onclick="alert('お気に入り')" value="お気に入り">
                                        <input type="button" onclick="alert('メッセージ')" value="メッセージ">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['posts']
}
</script>

<style>
    .twiit-contents{
        height: 300px;
    }
</style>