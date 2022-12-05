<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar />
            <div class="container-fluid">
                <TablePengambilan />
            </div>
        </div>
        <Footer />
    </div>
</template>

<script>
import Footer from '../../../Components/Footer.vue';
import NavBar from '../../../Components/NavBar.vue';
import TablePengambilan from './TablePengambilan.vue';
export default {
    name: 'DataPengambilan',
    components: { NavBar, TablePengambilan, Footer }
}
</script>