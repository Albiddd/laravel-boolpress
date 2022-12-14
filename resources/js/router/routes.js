import Home from '../pages/Home.vue';
import ContactUs from '../pages/ContactUs.vue';
import AboutUs from '../pages/AboutUs.vue';
import PostIndex from '../pages/Post.index.vue';
import PostShow from '../pages/Post.show.vue';
import Page404 from '../components/404.vue'


const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/contatti',
        name: 'contact-us',	
        component: ContactUs,
    },
    {
        path: '/chi-siamo',
        name: 'about-us',	
        component: AboutUs,
    },
    {
        path: '/blog',
        name: 'post.index',	
        component: PostIndex,
    },
    {
        path: '/blog/:sulg',
        name: 'post.show',	
        component: PostShow,
        props: true
    },
    {
        path: '/*',
        name: '404',
        component: Page404,
    }
];

export default routes;