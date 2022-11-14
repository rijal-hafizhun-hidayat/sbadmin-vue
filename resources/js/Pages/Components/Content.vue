<template>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <NavBar />

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <Card />
                </div>

                <!-- Content Row -->

                <div class="row">
                    <Chart />
                </div>

                <!-- Content Row -->
                <div class="row">

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <Footer />
    </div>
<!-- End of Content Wrapper -->
</template>

<script>
import NavBar from './NavBar.vue'
import Card from './Card.vue'
import Chart from './Chart.vue'
import Footer from './Footer.vue'

export default {
    components: { NavBar, Card, Chart, Footer },
    name: 'Content'
}
</script>