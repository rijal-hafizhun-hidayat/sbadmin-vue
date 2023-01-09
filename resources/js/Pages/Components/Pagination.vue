<template>
   <Component 
        :is="link.url ? 'Link' : 'span'"
        v-for="link in links"
        :href="link.url"
        v-html="link.label"
        class="px-2"
        :class="{ 'text-dark': ! link.url, 'font-weight-bold' : link.active }"/>
</template>
<script>
import { Link } from '@inertiajs/inertia-vue3';
import { onMounted } from '@vue/runtime-core';

export default{
    name: 'Pagination',
    components: { Link },
    props: {
        links: Array
    },
    setup(props){
        onMounted(() => {
            console.log(props.links)
        })
    }
}
</script>