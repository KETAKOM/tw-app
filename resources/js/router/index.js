import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)


import MyTwitterContents from '../components/MyTwitterContents.vue'
import TwitterContents from '../components/TwitterContents.vue'

import Header from '../components/twitter_contents/Header.vue'
import ProfileHeader from '../components/twitter_contents/ProfileHeader.vue'
import ProfileBar from '../components/twitter_contents/ProfileBar.vue'
import ProfileCard from '../components/twitter_contents/ProfileCard.vue'
import SideBar from '../components/twitter_contents/SideBar.vue'
import TwiitList from '../components/twitter_contents/TwiitList.vue'

export default new Router({
    routes: [
        {
            path: '/',
            component: MyTwitterContents,
            children: [
                {
                    path: '/',
                    components: {
                        Header: Header,
                        ProfileCard: ProfileCard,
                        TwittList: TwiitList,
                        SideBar: SideBar,
                    },
                    props: true
                },
            ],
            props: true
        },
        {
            
            path: '/about',
            component: TwitterContents,
            children: [
                {
                    path: '/about',
                    components: {
                        Header: Header,
                        ProfileHeader: ProfileHeader,
                        ProfileBar: ProfileBar,
                        ProfileCard: ProfileCard,
                        TwittList: TwiitList,
                        SideBar: SideBar,
                    },
                    props: true
                }
              ],
            props: true
        },
    ],
})