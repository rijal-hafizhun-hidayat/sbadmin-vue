<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar :name="nameAkun"/>
            <div class="container-fluid">
                <!-- Page Heading -->
                <TableAkun :akuns="akuns"/>
            </div>
        </div>
        <Footer />
    </div>
</template>
<script>
import NavBar from '../../Components/NavBar.vue'
import Footer from '../../Components/Footer.vue'
import TableAkun from './TableAkun.vue'
import { onMounted } from '@vue/runtime-core'
export default {
    name: 'DataAkun',
    components: { NavBar, Footer, TableAkun },
    props: {
        akuns: Array,
        nameAkun: Array
    },
    setup(props){
        onMounted(() => {
            console.log(props.nameAkun)
        })
    }
}
</script>