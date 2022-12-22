<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isActiveAkun="true" :isShowAkun="true"/>
            <ShowAkun :akuns="akuns" :nameAkun="nameAkun"/>
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>
<script>
import { computed, onMounted } from '@vue/runtime-core'
import LogOut from '../Components/LogOut.vue'
import ScrollToTopButton from '../Components/ScrollToTopButton.vue'
import SideBar from './../Components/SideBar.vue'
import ShowAkun from './Components/ShowAkun.vue'
import { usePage } from '@inertiajs/inertia-vue3'

export default {
    components: { SideBar, ScrollToTopButton, LogOut, ShowAkun },
    name: 'Show',
    props: {
        akuns: Object,
        nameAkun: Array
    },
    // setup(props){
    //     onMounted(() => {
    //         console.log(props.akuns)
    //     })
    // }
}
</script>