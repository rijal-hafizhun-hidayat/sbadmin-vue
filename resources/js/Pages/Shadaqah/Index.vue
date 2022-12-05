<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isActiveShadaqah="true" :isShowShadaqah="true"/>
            <DataShadaqah />
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>
<script>
import LogOut from '../Components/LogOut.vue'
import ScrollToTopButton from '../Components/ScrollToTopButton.vue'
import SideBar from './../Components/SideBar.vue'
import DataShadaqah from './Components/DataShadaqah.vue'

export default {
    components: { SideBar, ScrollToTopButton, LogOut, DataShadaqah },
    name: 'IndexShadaqah',
    props: {
        datas: Object,
    }
}
</script>