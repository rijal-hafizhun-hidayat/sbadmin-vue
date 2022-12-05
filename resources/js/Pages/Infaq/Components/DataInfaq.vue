<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar />
            <div class="container-fluid">
                <!-- Page Heading -->
                <TableInfaq />
            </div>
        </div>
        <Footer />
    </div>
</template>
<script>
import NavBar from '../../Components/NavBar.vue'
import Footer from '../../Components/Footer.vue'
import TableInfaq from './TableInfaq.vue'
export default {
    components: { NavBar, Footer, TableInfaq },
    name: 'DataInfaq',
}
</script>