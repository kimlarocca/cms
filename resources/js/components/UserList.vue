<template>
    <div class="container container-white">
        <table class="text-left">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>ID</th>
            </tr>
            <tr v-for="user in users">
                <td>{{user.name}}</td>
                <td>{{user.email}}</td>
                <td>{{user.website_id}}</td>
                <td><i class="fas fa-edit"></i></td>
            </tr>
        </table>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name: 'UserList',
        data () {
            return {
                users: []
            }
        },
        mounted () {
            axios
            axios.get('/api/users')
                .then(response => (
                    this.users = response.data
                ))
        },
    }
</script>
