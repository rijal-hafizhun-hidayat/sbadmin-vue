<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar />
            <DataProfile :nameAkun="nameAkun" :profile="profile"/>
        </div>
    </div>
</template>
<script>
import LogOut from '../Components/LogOut.vue'
import ScrollToTopButton from '../Components/ScrollToTopButton.vue'
import SideBar from '../Components/SideBar.vue'
import DataProfile from './Components/DataProfile.vue'
export default {
    components: { LogOut, ScrollToTopButton, SideBar, DataProfile },
    name: 'IndexProfile',
    props: {
        nameAkun: Array,
        profile: Array
    }
    
}
</script>