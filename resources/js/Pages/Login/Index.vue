<template>
    <div class="bg-gradient-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body">
                            <!-- <div v-if="errors.username">{{ errors.username }}</div>
                            <div v-if="errors.password">{{ errors.password }}</div> -->
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        <form class="user" @submit.prevent="login">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" :class="{'is-invalid': errors.username}" id="exampleInputUsername" v-model="post.username" placeholder="Username...">
                                                <div v-if="errors.username" class="invalid-feedback">{{ errors.username }}</div>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" :class="{'is-invalid': errors.password}" id="exampleInputPassword" v-model="post.password" placeholder="Password">
                                                <div v-if="errors.password" class="invalid-feedback">{{ errors.password }}</div>
                                            </div>
                                            <input type="submit" value="Submit" class="btn btn-primary btn-user btn-block">
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</template>
<script>
import { reactive } from '@vue/reactivity'
import { Inertia } from '@inertiajs/inertia';
import swal from 'sweetalert';

export default {
    name: 'Index',
    props: {
        errors: Object,
    },
    setup(props){
        console.log(props.errors)
        const post = reactive({
            username: '',
            password: ''
        });

        function login(){
            return Inertia.post('/login',{
                username: post.username,
                password: post.password    
            });
        }

        return {
            post,
            login
        };
    }
}
</script>

<style scoped>
    .card-body{
        padding: 72.5px;
    }
</style>