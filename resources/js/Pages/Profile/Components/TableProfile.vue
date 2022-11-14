<template>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Profile</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>No Tlp</th>
                            <th>Kepala Keluarga</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                            <th>Tanggal Lahir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(dat, index) in datas.data" :key="dat.id">
                            <td>{{ index + 1 }}</td>
                            <td>{{ dat.nama }}</td>
                            <td v-if="dat.gender == 1">Laki-laki</td>
                            <td v-else>Perempuan</td>
                            <td>{{ dat.no_tlp }}</td>
                            <td>{{ dat.kk }}</td>
                            <td>{{ dat.alamat }}</td>
                            <td>{{ dat.tanggal_lahir }}</td>
                            <td>
                                <div class="text-center">
                                    <a href="#" class="btn btn-warning btn-circle mr-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </a>
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
export default {
    name: 'TableProfile',
    props: {
        datas: Object,
    },
    setup(props){
        onMounted(() => {
            console.log(props.datas)
        })
    }
}
</script>