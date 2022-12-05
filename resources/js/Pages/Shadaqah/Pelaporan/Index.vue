<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isActiveShadaqahPelaporan="true" :isShowShadaqah="true"/>
            <DataPelaporan/>
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>
<script>
import LogOut from '../../Components/LogOut.vue'
import ScrollToTopButton from '../../Components/ScrollToTopButton.vue'
import SideBar from '../../Components/SideBar.vue'
import DataPelaporan from './Components/DataPelaporan.vue'

export default {
    components: { SideBar, ScrollToTopButton, LogOut, DataPelaporan },
    name: 'PelaporanZakat',
}
</script>