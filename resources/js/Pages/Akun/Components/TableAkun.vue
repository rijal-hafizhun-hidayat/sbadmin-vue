<template>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Akun</h6>
        </div>
        <div class="card-body">
            <p v-if="flash">{{ flash }}</p>
            <div class="d-flex">
                <Link href="/akun/create" class="d-none d-sm-inline-block btn mb-3 btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i>
                    Tambah
                </Link>
                <input type="text" placeholder="Cari..." class="ml-auto mr-2 search" v-model="searchQuery" id="search" autocomplete="off">
                <a :href="'/akun/print'" class="d-none d-sm-inline-block btn mb-3 btn-sm btn-success shadow-sm">
                    <i class="fas fa-print"></i>
                    Print
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="( akun, index ) in find" :key="akun.id">
                            <td>{{ index + 1 }}</td>
                            <td>{{ akun.name }}</td>
                            <td>{{ akun.username }}</td>
                            <td>
                                <div class="text-center">
                                    <!-- <a href="#" class="btn btn-warning btn-circle mr-2">
                                        <i class="fas fa-edit"></i>
                                    </a> -->
                                    <Link :href="`/akun/show/${akun.id}`" class="btn btn-warning btn-circle mr-2">
                                        <i class="fas fa-edit"></i>
                                    </Link>
                                    <!-- <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a> -->
                                    <button @click.prevent="deleteAkun(akun.id)" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import { computed, onMounted, onUpdated, reactive, ref } from '@vue/runtime-core'
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/inertia-vue3'
import Swal from 'sweetalert2'

export default {
    name: 'TableAkun',
    components: { Link },
    props: {
        akuns: Array,
        flash: String
    },
    setup(props){

        const searchQuery = ref('')
        const isValue = reactive({
            value: ''
        })

        onMounted(() => {
            if(props.flash){
                return Swal.fire({
                    icon: 'success',
                    title: 'berhasil',
                    text: props.flash
                })
            }
        })

        const find = computed(() => {
            return props.akuns.filter((akun) => {
                return akun.name.toLowerCase().indexOf(searchQuery.value.toLowerCase()) != -1
            })
        })

        function deleteAkun(id){
            //console.log(id)
            Inertia.delete(`/akun/${id}`)
        }

        function print(){
            window.open(`/akun/print`)
        }

        return {
            searchQuery,
            find,
            isValue,
            print,
            deleteAkun,
        }
    }
}
</script>
<style scoped>
    .search{
        /* border: none; */
        /* margin-bottom: 10px; */
        height: 31px;
    }
</style>