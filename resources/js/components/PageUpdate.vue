<template>
    <div class="container container-white">
        <form @submit.prevent="updatePage">
            <label>Page Title:
                <input v-model="title" type="text" class="full-width margin-top-1">
            </label>
            <label>Content:
                <textarea v-model="content" class="margin-top-1"></textarea>
            </label>
            <button v-if="!saved" class="margin-top-1">save changes</button>
            <button v-else class="margin-top-1 saved">changes saved!</button>
        </form>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name: 'PageUpdate',
        data () {
            return {
                json: [],
                title: '',
                content: '',
                saved: false
            }
        },
        props: {
            id: String
        },
        computed: {
            pageID () {
                return parseInt(this.id)
            }
        },
        mounted () {
            axios.get('/api/pages/' + this.id)
                .then(response => (
                    this.json = response.data,
                        this.title = response.data.title,
                        this.content = response.data.content
                ))
        },
        methods: {
            updatePage () {
                axios
                    .put('/api/pages/' + this.id, {
                        title: this.title,
                        content: this.content
                    })
                    .catch(function (error) {
                        console.log(error)
                    })
                this.saved = true
            }
        },
        watch: {
            title () {
                this.saved = false
            },
            content () {
                this.saved = false
            }
        }
    }
</script>
