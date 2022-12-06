<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isActiveAkun="true" :isShowAkun="true"/>
            <DataAkun />
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>
<script>
import LogOut from '../Components/LogOut.vue'
import ScrollToTopButton from '../Components/ScrollToTopButton.vue'
import SideBar from './../Components/SideBar.vue'
import DataAkun from './Components/DataAkun.vue'

export default {
    components: { SideBar, ScrollToTopButton, LogOut, DataAkun, DataAkun },
    name: 'IndexAkun',
    props: {
        datas: Object,
    }
}
</script>