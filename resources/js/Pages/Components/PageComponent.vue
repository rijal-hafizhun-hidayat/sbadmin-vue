<template>
    <div id="page-top">
        <div id="wrapper">
            <SideBar />
            <Content />
        </div>
    </div>
    <ScrollToTopButton />
    <LogOut />
</template>

<script>
import Content from './Content.vue'
import LogOut from './LogOut.vue'
import ScrollToTopButton from './ScrollToTopButton.vue'
import SideBar from './SideBar.vue'
export default {
    components: { SideBar, Content, ScrollToTopButton, LogOut },
    name: 'PagetComponent'
}
</script>