<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isActiveInfaq="true" :isShowInfaq="true"/>
            <DataInfaq :datas="datas"/>
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>
<script>
import LogOut from '../Components/LogOut.vue'
import ScrollToTopButton from '../Components/ScrollToTopButton.vue'
import SideBar from './../Components/SideBar.vue'
import DataInfaq from './Components/DataInfaq.vue'

export default {
    components: { SideBar, ScrollToTopButton, LogOut, DataInfaq },
    name: 'IndexInfaq',
    props: {
        datas: Object,
    }
}
</script>