import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

// import twitter_contents from '../components/TwiitrContents.vue'
import todo_contents from '../components/TodoContents.vue'

export default new Router({
    mode: 'history',
    routes: [
        { path: '/', name: 'todo_contents', component: todo_contents},
        // { path: '/', name: 'twitter_contents', component: twitter_contents},
    ],
})