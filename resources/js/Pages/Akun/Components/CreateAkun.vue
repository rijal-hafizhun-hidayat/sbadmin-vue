<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar :name="nameAkun"/>
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Akun</h6>
                    </div>
                    <div class="card-body col-lg-6">
                        <form @submit.prevent="store">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input type="text" class="form-control" v-model="akunAdd.name" id="nama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="text" @change="setPass" class="form-control" v-model="akunAdd.username" id="username" placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="text" disabled class="form-control" v-model="akunAdd.password" id="password" placeholder="Masukkan Password">
                            </div>
                            <input class="btn btn-primary btn-sm" type="submit" value="submit">
                        </form>
                    </div>
                </div>
                </div>
            </div>
        <Footer />
    </div>
</template>
<script>
import NavBar from '../../Components/NavBar.vue'
import Footer from '../../Components/Footer.vue'
import { Inertia } from '@inertiajs/inertia';
import { onMounted, reactive } from '@vue/runtime-core'

export default {
    name: 'DataAkun',
    components: { NavBar, Footer },
    props: {
        akuns: Array,
        nameAkun: Array
    },
    setup(){
        const akunAdd = reactive({
            name: '',
            username: '',
            password: ''
        });

        function setPass(){
            return akunAdd.password = akunAdd.username + Math.ceil(Math.random()*10000) + '@admin'
        }

        function store(){
            return Inertia.post('/akun/simpan',{
                name: akunAdd.name,
                username: akunAdd.username,
                password: akunAdd.password    
            });
        }

        return {
            akunAdd,
            setPass,
            store
        }
    }
}
</script>