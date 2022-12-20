<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isActiveAkun="true" :isShowAkun="true"/>
            <CreateAkun :nameAkun="nameAkun" :errors="errors"/>
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>
<script>
import { onMounted } from '@vue/runtime-core'
import LogOut from '../Components/LogOut.vue'
import ScrollToTopButton from '../Components/ScrollToTopButton.vue'
import SideBar from './../Components/SideBar.vue'
import CreateAkun from './Components/CreateAkun.vue'
export default {
    name: 'Create',
    components: { SideBar, ScrollToTopButton, LogOut, CreateAkun },
    props: {
        errors: Object,
        nameAkun: Array
    },
    setup(props){
        onMounted(() => {
            console.log(props.nameAkun)
        })
    }
}
</script>