<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar />
            <div class="container-fluid">
                <!-- Page Heading -->
                <TableAkun />
            </div>
        </div>
        <Footer />
    </div>
</template>
<script>
import NavBar from '../../Components/NavBar.vue'
import Footer from '../../Components/Footer.vue'
import TableAkun from './TableAkun.vue'
export default {
    name: 'DataAkun',
    components: { NavBar, Footer, TableAkun },
}
</script>