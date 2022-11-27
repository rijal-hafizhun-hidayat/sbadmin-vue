<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar />
            <div class="container-fluid">
                <!-- Page Heading -->
                <TableZakat />
            </div>
        </div>
        <Footer />
    </div>
</template>
<script>
import NavBar from '../../Components/NavBar.vue'
import Footer from '../../Components/Footer.vue'
import TableZakat from './TableZakat.vue'
import { onMounted } from '@vue/runtime-core'
export default {
    components: { NavBar, Footer, TableZakat },
    name: 'DataZakat',
}
</script>