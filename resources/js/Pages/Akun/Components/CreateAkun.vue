<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar />
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Akun</h6>
                    </div>
                    <div class="card-body col-lg-6">
                        <form @submit.prevent="store">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" :class="{'is-invalid': errors.name}" v-model="akunAdd.name" id="name" placeholder="Masukkan Nama">
                                <div v-if="errors.name" class="invalid-feedback">{{ errors.name }}</div>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" @change="setPass" class="form-control" :class="{'is-invalid': errors.username}" v-model="akunAdd.username" id="username" placeholder="Masukkan Username">
                                <div v-if="errors.username" class="invalid-feedback">{{ errors.username }}</div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" :class="{'is-invalid': errors.email}" v-model="akunAdd.email" id="email" placeholder="Masukkan Email">
                                <div v-if="errors.email" class="invalid-feedback">{{ errors.email }}</div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" disabled class="form-control" :class="{'is-invalid': errors.password}" v-model="akunAdd.password" id="password" placeholder="Masukkan Password">
                                <div v-if="errors.password" class="invalid-feedback">{{ errors.password }}</div>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" :class="{'is-invalid': errors.role}" v-model="akunAdd.role" id="role">
                                    <option selected disabled value="">Pilih Role ...</option>
                                    <option value="1">Admin</option>
                                    <option value="0">Bendahara</option>
                                </select>
                                <div v-if="errors.role" class="invalid-feedback">{{ errors.role }}</div>
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
import Swal from 'sweetalert2'
import { onMounted, reactive } from '@vue/runtime-core'

export default {
    name: 'DataAkun',
    components: { NavBar, Footer },
    props: {
        errors: Object,
        akuns: Array,
        valueNavbar: Array
    },
    setup(props){
        const akunAdd = reactive({
            name: '',
            username: '',
            password: '',
            email: '',
            role: ''
        });

        onMounted(() => {
            console.log(props.valueNavbar)
        })

        function setPass(){
            return akunAdd.password = akunAdd.username + Math.ceil(Math.random()*10000) + '@admin'
        }

        function store(){
            const save = Inertia.post('/akun/simpan',{
                name: akunAdd.name,
                username: akunAdd.username,
                password: akunAdd.password,
                email: akunAdd.email,
                role: akunAdd.role  
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