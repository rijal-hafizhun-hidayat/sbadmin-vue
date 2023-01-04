<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar :name="nameAkun"/>
            <div class="container-fluid">
                <div class="row">
                    <!-- Page Heading -->
                    <div class="col-sm-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="nama_depan">Nama Depan</label>
                                        <input type="text" class="form-control" id="nama_depan">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_belakang">Nama Belakang</label>
                                        <input type="text" class="form-control" id="nama_belakang">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password">Password Baru</label>
                                        <input type="password" class="form-control" id="new_password">
                                    </div>
                                    <div class="form-group">
                                        <label for="conf_password">Konfirmasi Password</label>
                                        <input type="password" class="form-control" id="conf_password">
                                    </div>
                                    <input class="btn btn-primary btn-sm" type="submit" value="Simpan Perubahan">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <img class="mx-auto d-block" :src="'/admin/img/undraw_profile.svg'">
                                <div class="text-center mt-3">
                                    <p class="font-weight-bold">Rijal Hafizhun Hidayat</p>
                                    <p>umur 20</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer />
    </div>
</template>
<script>
import NavBar from '../../Components/NavBar.vue';
import Footer from '../../Components/Footer.vue';
export default {
    components: { NavBar, Footer },
    name: 'DataProfile',
    props: {
        nameAkun: Array,
    }
}
</script>
<style scoped>
    img{
        width: 250px;
    }
</style>