<template>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-text mx-3">ZIS-APP</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item ">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Tools
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->

        <!-- Nav Item - Zakat Menu -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesZakat"
                aria-expanded="true" aria-controls="collapseUtilitiesZakat">
                <i class="fas fa-money-bill"></i>
                <span>Zakat</span>
            </a>
            <div id="collapseUtilitiesZakat" class="collapse" :class="{show: isShowZakat}" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">List Tools:</h6>
                    <!-- <a class="collapse-item" href="#">Data</a> -->
                    <Link class="collapse-item" :class="{ active: isActiveZakat }" href="/zakat">Data</Link>
                    <Link class="collapse-item" :class="{ active: isActiveZakatPelaporan }" href="/zakat/pelaporan">Pelaporan</Link>
                    <Link class="collapse-item" :class="{ active: isActiveZakatPengambilan }" href="/zakat/pengambilan">Pengambilan</Link>
                    <!-- <a class="collapse-item" href="#">Pelaporan</a> -->
                </div>
            </div>
        </li>
        
        <!-- Nav Item - Infaq Menu -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesInfaq"
                aria-expanded="true" aria-controls="collapseUtilitiesInfaq">
                <i class="fas fa-money-bill"></i>
                <span>Infaq</span>
            </a>
            <div id="collapseUtilitiesInfaq" class="collapse" :class="{show: isShowInfaq}" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">List Tools:</h6>
                    <!-- <a class="collapse-item" href="#">Data</a> -->
                    <Link class="collapse-item" :class="{ active: isActiveInfaq }" href="/infaq">Data</Link>
                    <Link class="collapse-item" :class="{ active: isActiveInfaqPelaporan }" href="/infaq/pelaporan">Pelaporan</Link>
                    <Link class="collapse-item" :class="{ active: isActiveInfaqPengambilan }" href="/infaq/pengambilan">Pengambilan</Link>
                    <!-- <a class="collapse-item" href="#">Pelaporan</a> -->
                </div>
            </div>
        </li>

        <!-- Nav Item - shadaqah Menu -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesShadaqah"
                aria-expanded="true" aria-controls="collapseUtilitiesShadaqah">
                <i class="fas fa-money-bill"></i>
                <span>Shadaqah</span>
            </a>
            <div id="collapseUtilitiesShadaqah" class="collapse" :class="{show: isShowShadaqah}" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">List Tools:</h6>
                    <!-- <a class="collapse-item" href="#">Data</a> -->
                    <Link class="collapse-item" :class="{ active: isActiveShadaqah }" href="/shadaqah">Data</Link>
                    <Link class="collapse-item" :class="{ active: isActiveShadaqahPelaporan }" href="/shadaqah/pelaporan">Pelaporan</Link>
                    <Link class="collapse-item" :class="{ active: isActiveShadaqahPengambilan }" href="/shadaqah/pengambilan">Pengambilan</Link>
                    <!-- <a class="collapse-item" href="#">Pelaporan</a> -->
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <!-- <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div> -->

    </ul>
<!-- End of Sidebar -->
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    name: 'SideBar',
    components: { Link },
    props:{

        //zakat
        isShowZakat: Boolean,
        isActiveZakatPelaporan: Boolean,
        isActiveZakat: Boolean,
        isActiveZakatPengambilan: Boolean,

        //infaq
        isShowInfaq: Boolean,
        isActiveInfaqPelaporan: Boolean,
        isActiveInfaq: Boolean,
        isActiveInfaqPengambilan: Boolean,

        //shadaqah
        isShowShadaqah: Boolean,
        isActiveShadaqahPelaporan: Boolean,
        isActiveShadaqah: Boolean,
        isActiveShadaqahPengambilan: Boolean,
    },
    setup(props){
        console.log(props.isActiveZakatPelaporan)
        console.log(props.isActiveZakat)
    }
}
</script>