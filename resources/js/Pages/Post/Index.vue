<template>
    <Head>
        <title>Posts</title>
        <meta type="description" content="Information for Posts" head-key="description">
    </Head>
        <div class="flex justify-between mb-5">
            <h1 class="text-3xl">Users</h1> 
            <input v-model="search" type="text" placeholder="Search..." class="border px-2 rounded-lg">
        </div>
        <div class="flex">
            <table class="border-separate border-spacing-2 border border-slate-400  mx-auto">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody v-for="user in users.data" :key="user.id">
                    <tr class="text-center">
                        <td>{{user.name}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- PAGINATOR -->
        <div class="mt-6">
            <Pagination :links="users.links"/>
        </div>
</template>
<script>
// import {Inertia} from '@inertiajs/inertia-vue3';
import Layout from '@/Components/Shared/Navbar/Layout.vue'
import { Head } from '@inertiajs/inertia-vue3';
import Pagination from '@/Components/Shared/Pagination.vue'
export default {
    data(){
        return{
            search:null
        }
    },
    layout:Layout,
    watch:{
        search(newSearch, prevSearch){
            console.log('watch',newSearch)
            this.$inertia.get('/posts', {search : newSearch},{ preserveState:true, replace:true})
        },
    },
    props:{
         posts : Array,
        users : Object,
        filters : Object
    },
    components:{
        Head,
        Pagination
    }
}
</script>



