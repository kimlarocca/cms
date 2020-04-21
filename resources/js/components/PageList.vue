<template>
    <div class="container">
        <a :href="'/page/update/'+page.id" v-for="(page, index) in json" :key="index" class="margin-bottom-1">
            <div class="grid-x more-opaque padding-1">
                <div class="cell large-10">
                    {{page.title}}
                </div>
                <div class="cell large-2 text-right">
                    <i class="fas fa-angle-right link"></i>
                </div>
            </div>
        </a>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        name: 'PageList',
        data () {
            return {
                json: []
            }
        },
        mounted () {
            axios.get('/api/pages')
                .then(response => (
                    this.json = response.data
                ))
        },
        methods: {
            // deletePage (page) {
            //     axios
            //         .delete('/api/pages/' + page.id)
            //         .catch(function (error) {
            //             console.log(error)
            //         })
            //     this.json = this.json.filter(item => item !== page)
            // }
        }
    }
</script>

<style lang="scss" scoped>
    i {
        font-size: 3rem;
    }
</style>
