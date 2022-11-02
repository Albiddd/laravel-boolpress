<template>
    <header>
        <nav class="bg-white shadow dark:bg-gray-800">
            <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
                <div class="px-2">
                    LOGO
                </div>
                <ul class="flex items-center">
                    <li class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6" v-for="(link, i) in navLinks" :key="i">
                        <router-link :to="{ name: link.name}">{{link.text}}</router-link>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
  
</template>

<script>
export default {
    data(){
        return{
            navLinks:[
                {
                    text: 'Home',
                    path: '/',
                    name: 'home',
                },
                {
                    text: 'Blog',
                    path: '/blog',
                    name: 'post.index',
                },
                {
                    text: 'Chis siamo',
                    path: '/chi-siamo',
                    name: 'about-us'
                },
                {
                    text: 'Contatti',
                    path: '/contatti',
                    name: 'contact-us'
                },
            ]
        }
    }
}
</script>

<style lang="scss" scoped>

</style>