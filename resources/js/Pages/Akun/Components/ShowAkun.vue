<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar :name="nameAkun"/>
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Akun</h6>
                    </div>
                    <div class="card-body col-lg-6">
                        <form @submit.prevent="store">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama</label>
                                <input type="text" class="form-control" id="name" v-model="data.name" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Username</label>
                                <input type="text" class="form-control" id="username" v-model="data.username" placeholder="Masukkan Username">
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="text" disabled class="form-control" id="password" placeholder="Masukkan Password">
                            </div> -->
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Role</label>
                                <select class="form-control" v-model="data.role" id="exampleFormControlSelect1">
                                    <option selected disabled value="">Pilih Role ...</option>
                                    <option value="1">Admin</option>
                                    <option value="0">Bendahara</option>
                                </select>
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
    name: 'Show',
    components: { NavBar, Footer },
    props: {
        errors: Object,
        akuns: Object,
        nameAkun: Array
    },
    setup(props){
        const data = reactive({
            name: props.akuns.name,
            username: props.akuns.username,
            password: props.akuns.password,
            role: props.akuns.role
        });

        // onMounted(() => {
        //     console.log(akunAdd)
        // })

        function setPass(){
            return data.password = data.username + Math.ceil(Math.random()*10000) + '@admin'
        }

        function store(){
            return Inertia.post('/akun/simpan',{
                name: data.name,
                username: data.username,
                password: data.password,
                role: data.role  
            });
            //return console.log(akunAdd)
        }

        return {
            data,
            setPass,
            store
        }
    }
}
</script>