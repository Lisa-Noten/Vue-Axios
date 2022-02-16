<template>
    <div class="container">
        <div v-for="post in posts" :key="post.id">
            <h2>{{ post.title }}</h2>
            <p>{{ post.body }}</p>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: {},
        }
    },
    methods: {
        getPost(){
            axios.get('/fetch').then((response)=>{
                this.posts = response.data.posts
            })
        }
    },
    created() {
        this.getPost()
    }
}
</script>
