<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isActiveZakat="true" :isShow="true"/>
            <DataZakat :datas="datas"/>
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>
<script>
import LogOut from '../Components/LogOut.vue'
import ScrollToTopButton from '../Components/ScrollToTopButton.vue'
import SideBar from './../Components/SideBar.vue'
import DataZakat from './Components/DataZakat.vue'

export default {
    components: { SideBar, ScrollToTopButton, LogOut, DataZakat },
    name: 'IndexProfile',
    props: {
        datas: Object,
    }
}
</script>