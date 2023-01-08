<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isActiveAkun="true" :isShowAkun="true"/>

            <!-- start conditional component-->
            <!-- <div v-if="$page.props.flash.message">{{ $page.props.flash.message }}</div> -->

            <DataAkun v-if="page === 'IndexAkun'" 
                :akuns="akuns"
                :flash="$page.props.flash.message"/>

            <CreateAkun v-if="page === 'CreateAkun'"
                :errors="errors"/>

            <ShowAkun v-if="page === 'ShowAkun'"
                :akuns="akuns"
                :errors="errors"/>
            
            <!-- finisih conditional component-->

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
import CreateAkun from './Components/CreateAkun.vue'
import ShowAkun from './Components/ShowAkun.vue'
import { usePage } from '@inertiajs/inertia-vue3'

export default {
    components: { SideBar, ScrollToTopButton, LogOut, DataAkun, CreateAkun, ShowAkun },
    name: 'IndexAkun',
    props: {
        akuns: Array,
        nameAkun: Array,
        errors: Object,
        flash: Object,
        page: String,
        valueNavbar: Array
    },
    setup(props){
        const message = computed(() => usePage().props.value.flash.message)
        onMounted(() => {
            console.log(props.valueNavbar)
        })
        
        return {
            message
        }
    }
}
</script>