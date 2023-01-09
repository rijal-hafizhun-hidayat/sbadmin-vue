<template>
    <div v-if="links.length > 1">
        <div>
            <template v-for="(link, key) in links" :key="key">
                <div v-if="link.url === null" v-html="link.label" />
                <Link v-else :href="link.url" v-html="link.label" />
            </template>
        </div>
    </div>
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