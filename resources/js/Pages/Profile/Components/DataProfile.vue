<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar :name="nameAkun" :imgProfile="profile.gambar"/>
            <div class="container-fluid">
                <div class="row">
                    <!-- Page Heading -->
                    <div class="col-sm-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
                            </div>
                            <div class="card-body">
                                <form @submit.prevent="update" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" v-model="profiles.name" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" v-model="profiles.username" class="form-control" id="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" v-model="profiles.email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password">Password Baru</label>
                                        <input type="password" v-model="profiles.newPassword" class="form-control" id="new_password">
                                    </div>
                                    <div class="form-group">
                                        <label for="conf_password">Konfirmasi Password</label>
                                        <input type="password" v-model="profile.konfPassword" class="form-control" id="conf_password">
                                    </div>
                                    <div class="form-group row">
                                        <label for="image" class="col-sm-2 col-form-label">Upload</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="mt-1" id="image" @input="profiles.gambar = $event.target.files[0]">
                                        </div>
                                    </div>
                                    <input class="btn btn-primary btn-sm" type="submit" value="Simpan Perubahan">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <img class="mx-auto d-block" :src="profiles.urlImg">
                                <div class="text-center mt-3">
                                    <p class="font-weight-bold">{{ profiles.name }}</p>
                                    <p v-if="profile.role == 1">admin</p>
                                    <p v-else>Bendahara</p>
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
import { Inertia } from '@inertiajs/inertia';
import { useForm } from '@inertiajs/inertia-vue3';
import { reactive } from '@vue/reactivity';
export default {
    components: { NavBar, Footer },
    name: 'DataProfile',
    props: {
        errors: Object,
        nameAkun: Array,
        profile: Array
    },
    setup(props){
        const profiles = reactive({
            name: props.profile.name,
            username: props.profile.username,
            email: props.profile.email,
            gambar: '',
            role: props.profile.role,
            newPassword: '',
            konfPassword: '',
            urlImg: '/storage/images/'+props.profile.gambar
        })
        

        function update(){
            //console.log(profiles);
            return Inertia.post(`/profile`, profiles, {
                _method: 'put',
                forceFormData: true,
            });
        }

        return{
            profiles,
            update
        }
    }
}
</script>
<style scoped>
    img{
        width: 250px;
    }
</style>