<template>
        <Link
          :class="{ 'font-bold underline' : active }"
          class="text-black hover:underline"
        >
        <slot></slot>
        </Link>
</template>
<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
props : {
    active :Boolean
}, 
components: {
      Link,
    },
};
</script>