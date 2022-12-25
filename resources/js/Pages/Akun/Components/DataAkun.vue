<template>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <NavBar :name="nameAkun"/>
            <div class="container-fluid">
                <!-- Page Heading -->
                <!-- <div v-if="flash">{{ flash }}</div> -->
                <TableAkun :akuns="akuns" :flash="flash"/>
            </div>
        </div>
        <Footer />
    </div>
</template>
<script>
import NavBar from '../../Components/NavBar.vue'
import Footer from '../../Components/Footer.vue'
import TableAkun from './TableAkun.vue'
import { onBeforeMount, onMounted, onUnmounted, onUpdated } from '@vue/runtime-core'
export default {
    name: 'DataAkun',
    components: { NavBar, Footer, TableAkun },
    props: {
        akuns: Array,
        nameAkun: Array,
        flash: String
    },
    // setup(props){
    //     onBeforeMount(() => {
    //         if(props.flash){
    //             return Swal.fire({
    //                 icon: 'success',
    //                 title: 'success',
    //                 text: props.flash
    //             })
    //         }
    //     })
    // }
}
</script>