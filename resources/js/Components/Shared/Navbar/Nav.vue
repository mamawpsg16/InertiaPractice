<script>
  import Navlink from '@/Components/Shared/Navbar/Navlink.vue'
  export default{
  components: {
        Navlink,
      },
  };
</script>
<template >
    <nav class="mx-5">
        <ul class=" flex  space-x-4">
          <li>
            <Navlink href="/posts" :active=" $page.component === 'Post/Index'">
              Home
            </Navlink>
          </li>
          <li>
            <Navlink href="/about" :active=" $page.component === 'About'">
              About
            </Navlink>
          </li>
            <!-- <li><Link href="/save" method="post" :data="{name:'Kevin'}" as="button" class="text-blue-500 hover:underline" >Save</Link></li>
            <li><Link href="/logout2" method="post" as="button" class="text-blue-500 hover:underline" >Log Out</Link></li> -->
        </ul>
    </nav>
</template>
