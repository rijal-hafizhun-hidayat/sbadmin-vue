<template>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Infaq</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Muzakki</th>
                            <th>Gender</th>
                            <th>No Tlp</th>
                            <th>Jenis Zakat</th>
                            <th>Harta</th>
                            <th>Nominal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rijal Hafizhun Hidayat</td>
                            <td>Laki-laki</td>
                            <td>081393784144</td>
                            <td>Zakat Mal</td>
                            <td>Emas</td>
                            <td>Rp. 1.000.000</td>
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
    name: 'TableInfaq',
}
</script>