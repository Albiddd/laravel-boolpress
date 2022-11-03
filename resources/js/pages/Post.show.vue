<template>
  <div>
    <section>
        <div class="container mx-auto m-2">
            <h1 class="text-center font-bold text-4xl py-2">
                Pagina di dettaglio del post
            </h1>
            <img v-if="post.cover_path" h-full w-full object-fit object-center :src="post.cover_path" alt="">
            <h3 class="font-bold my-2">{{ post.title }}</h3>
            <div v-if="post.category" class="category">
                {{ post.category.name }}
            </div>
            <div class="tags">
                <span class="inline-block bg-gray-200 cursor-default rounded-full px-3 py-1 text-sm font-semibold text-gray-700 hover:bg-indigo-300 hover:text-white mr-2 mb-2"
                v-for="tag in post.tags" :key="tag.slug">
                    {{ tag.name }}
                </span>
            </div>
            <p><strong>Contenuto:</strong></p>
            <p>{{ post.content }}</p>
            <div class="my-4">
                <router-link :to="{ name: link.name}" class="bg-indigo-400 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded">Indietro</router-link>
            </div>
        </div>
    </section>
  </div>
</template>

<script>
export default {
    props: ['slug'],
    data(){
        return{
            post: null,
            link:
            {
                text: 'Blog',
                path: '/blog',
                name: 'post.index',
            },
    }
    },
    methods:{
        fetchPost(){
            // const slug = this.$route.params.slug
            axios.get(`/api/posts/${this.slug}`).then(res => {
                // console.log(res.data);
                const {post} = res.data;
                this.post = post;
            }).catch(err => {
                // console.log(err);
                this.$router.replace({name: '404'})
            })
        }    
    },
    beforeMount(){
        this.fetchPost()
    }
}
</script>

<style lang="scss" scoped>

</style>