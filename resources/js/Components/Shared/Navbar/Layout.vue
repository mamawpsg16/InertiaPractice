<template>
    <Head title="My App">
        <!-- <title>My App</title> -->
        <!-- <meta type="description" content="Information for my App" head-key="description"> -->
    </Head>
    <section class="p-6 bg-gray-300">
        <header class="flex justify-between">
            <h1 class="font-bold text-lg">My App</h1>
            <Nav/>
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot></slot>
        </div>
    </section>
</template>
<script>
import Nav from '@/Components/Shared/Navbar/Nav.vue'
import { Head } from '@inertiajs/inertia-vue3';
export default {
    components:{
        Nav,
        Head
    }
}
</script>
<style lang="">
    
</style>