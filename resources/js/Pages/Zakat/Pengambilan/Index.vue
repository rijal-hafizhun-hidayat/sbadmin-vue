<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isActiveZakatPengambilan="true" :isShow="true"/>
            <DataPengambilan />
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>
<script>
import ScrollToTopButton from '../../Components/ScrollToTopButton.vue';
import LogOut from '../../Components/LogOut.vue';
import SideBar from '../../Components/SideBar.vue';
import DataPengambilan from './Components/DataPengambilan.vue';
export default {
    name: 'PengambilanZakat',
    components: { SideBar, DataPengambilan, LogOut, ScrollToTopButton }
}
</script>