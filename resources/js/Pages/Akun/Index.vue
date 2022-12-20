<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isActiveAkun="true" :isShowAkun="true"/>
            <DataAkun :akuns="akuns" :nameAkun="nameAkun"/>
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
import DataAkun from './Components/DataAkun.vue'
import { usePage } from '@inertiajs/inertia-vue3'

export default {
    components: { SideBar, ScrollToTopButton, LogOut, DataAkun, DataAkun },
    name: 'IndexAkun',
    props: {
        akuns: Array,
        nameAkun: Array
    },
    setup(){
        const message = computed(() => usePage().props.value.flash.message)

        //console.log(message)
        return {
            message
        }
    }
}
</script>