<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar />
            <div class="container-fluid">
                <TablePelaporan />
            </div>
        </div>
        <Footer />
    </div>
</template>
<script>
import Footer from '../../../Components/Footer.vue';
import NavBar from '../../../Components/NavBar.vue';
import TablePelaporan from './TablePelaporan.vue';
export default {
    name: 'DataPelaporan',
    components: { NavBar, TablePelaporan, Footer }
}
</script>