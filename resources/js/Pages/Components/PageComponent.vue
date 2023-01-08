<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar :isShowDashboard="true"/>
            <Content :valueDashboard="valueDashboard"/>
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>

<script>
import { onMounted } from '@vue/runtime-core'
import Content from './Content.vue'
import LogOut from './LogOut.vue'
import ScrollToTopButton from './ScrollToTopButton.vue'
import SideBar from './SideBar.vue'
export default {
    components: { SideBar, Content, ScrollToTopButton, LogOut },
    name: 'PagetComponent',
    props: {
        valueDashboard: Array
    },
    // setup(props){
    //     onMounted(() => {
    //         console.log(props.name)
    //     })
    // }
}
</script>