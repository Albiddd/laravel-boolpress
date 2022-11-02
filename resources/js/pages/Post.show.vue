<template>
  <div>
    <section>
        <div class="container m-2">
            <h1 class="font-semibold">
                Pagina di dettaglio del post
            </h1>
            <p>{{ slug }}</p>
        </div>
    </section>
  </div>
</template>

<script>
export default {
    props: ['slug'],
    data(){
        return{
            post: null
        }
    },
    methods:{
        fetchPost(){
            // const slug = this.$route.params.slug
            axios.get(`/api/posts/${this.slug}`).then(res => {
                console.log(res.data);
            }).catch(err => {
                console.log(err);
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