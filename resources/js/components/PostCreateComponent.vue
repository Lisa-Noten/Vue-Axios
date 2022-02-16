<template>
    <div class="container">
        <div>
            <form @submit="store">
                <label for="PostTitle" class="form control">Title</label>
                <input type="text" class="form-control" id="PostTitle">

                <label for="PostSlug" class="form control">Slug</label>
                <input type="text" class="form-control" id="PostSlug">

                <label for="PostExcerpt" class="form control">Excerpt</label>
                <input type="text" class="form-control" id="PostExcerpt">

                <label for="PostBody" class="form-control">Body</label>
                <textarea class="form-control" id="PostBody"></textarea>

                <button class="btn btn-secondary">Submit</button>
            </form>
            <div class="">
                {{ createdPosts }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('test')
        },

        data() {
            return {
                title: '',
                slug: '',
                exerpt: '',
                body: '',
            };
        },
        methods: {
            postFormSubmit(e) {
                e.preventDefault();
                let currentPost = this;

                axios.post('/formSubmit', {
                    title: this.title,
                    slug: this.slug,
                    excerpt: this.excerpt,
                    body: this.body
                })
                .then(function (response) {
                    currentPost.createdPosts = response.data;
                })
                .catch(function (error) {
                    currentPost.createdPosts = error;
                })
            }
        }
    }
</script>
