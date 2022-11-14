<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar />
            <DataProfile :datas="datas"/>
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>
<script>
import LogOut from '../Components/LogOut.vue'
import ScrollToTopButton from '../Components/ScrollToTopButton.vue'
import SideBar from './Components/SideBar.vue'
import DataProfile from './Components/DataProfile.vue'

export default {
    components: { SideBar, ScrollToTopButton, LogOut, DataProfile },
    name: 'IndexProfile',
    props: {
        datas: Object,
    },
}
</script>