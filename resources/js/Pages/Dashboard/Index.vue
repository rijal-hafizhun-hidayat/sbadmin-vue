<template>
    <PageComponent :nameAkun="nameAkun"/>
</template>

<script>
import { onMounted } from '@vue/runtime-core'
import PageComponent from '../Components/PageComponent.vue'
export default {
    components: { PageComponent },
    name: 'Index',
    props: {
        nameAkun: Array // <- nama props yang dibuat di controller saat parsing data
    },
    setup(props){
        // onMounted(() => {
        //     console.log(props.nameAkun)
        // })
    }
}
</script>