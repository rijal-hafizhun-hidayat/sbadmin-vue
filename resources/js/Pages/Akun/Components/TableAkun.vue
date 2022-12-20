<template>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Akun</h6>
        </div>
        <div class="card-body">
            <Link href="/akun/create" class="d-none d-sm-inline-block btn mb-3 btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                Tambah
            </Link>
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
                        <tr v-for="( akun, index ) in akuns" :key="akun.id">
                            <td>{{ index + 1 }}</td>
                            <td>{{ akun.name }}</td>
                            <td>{{ akun.username }}</td>
                            <td>
                                <div class="text-center">
                                    <!-- <a href="#" class="btn btn-warning btn-circle mr-2">
                                        <i class="fas fa-edit"></i>
                                    </a> -->
                                    <Link href="#" class="btn btn-warning btn-circle mr-2">
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
import { onMounted } from '@vue/runtime-core'
import { Inertia } from '@inertiajs/inertia';
import { Link } from '@inertiajs/inertia-vue3'
export default {
    name: 'TableAkun',
    components: { Link },
    props: {
        akuns: Array
    },
    setup(){
        function deleteAkun(id){
            //console.log(id)
            Inertia.delete(`/akun/${id}`)
        }

        return {
            deleteAkun
        }
    }
}
</script>