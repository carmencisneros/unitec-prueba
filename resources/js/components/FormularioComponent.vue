<template>
    <div class="card">
        <div class="card-header">Registro</div>
            <form id="form" method="POST" action @submit.prevent="registrar('form')" class="container">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nombre" class="col-md-4 col-form-label text-md-left">Nombre(s) *</label>
                        <input v-model="nombre" id="nombre" type="text" class="form-control" :class="{'borde-rojo' : errors.has('nombre')}" name="nombre" autocomplete="name" placeholder="Nombre" v-validate="{ required:true, regex:/^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="apellido_paterno" class="col-md-12 col-form-label text-md-left">Apellido Paterno *</label>
                        <input v-model="apellido_paterno" id="apellido_paterno" type="text" class="form-control" :class="{'borde-rojo' : errors.has('apellido_paterno')}" name="apellido_paterno" v-validate="{ required:true, regex:/^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/}"  placeholder="Apellido Paterno">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellido_materno" class="col-md-12 col-form-label text-md-left">Apellido Materno *</label>
                        <input v-model="apellido_materno" id="apellido_materno" type="text" class="form-control" :class="{'borde-rojo' : errors.has('apellido_materno')}" name="apellido_materno" value="" v-validate="{ required:true, regex:/^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$/}"  placeholder="Apellido Materno">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="genero" class="col-md-12 col-form-label text-md-left">Genero *</label>
                        <select @change="generoSelect($event)" v-model="generoSelected" id="genero" type="text" class="form-control" :class="{'borde-rojo' : errors.has('genero')}" name="genero" value="" v-validate="'required'" >
                            <option value="">Selecciona una opción</option>
                            <option v-for="genero in generos" :key="genero.id" :value="genero.id">{{genero.descripcion}}</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="edad" class="col-md-12 col-form-label text-md-left">Edad *</label>
                        <input onKeyPress="if(this.value.length === 2) return false" type="number" min="1" max="99" v-model="edad" id="edad" class="form-control" :class="{'borde-rojo' : errors.has('edad')}" name="edad" value="" v-validate="{required:true, numeric:true}"  placeholder="Edad">
                    </div>
                    <div class="form-group col-md-4">
                         <label for="estado_civil" class="col-md-12 col-form-label text-md-left">Estado Civil *</label>
                        <select @change="estado_civilSelect($event)" id="estado_civil" type="text" class="form-control" :class="{'borde-rojo' : errors.has('estado_civil')}" name="estado_civil" value="" v-validate="'required'" >
                            <option value="">Selecciona una opción</option>
                            <option v-for="estado_civil in edosCiviles" :key="estado_civil.id" :value="estado_civil.id">{{estado_civil.descripcion}}</option>
                        </select>   
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email" class="col-md-12 col-form-label text-md-left">E-mail *</label>
                        <input v-model="email" id="email" type="email" class="form-control" :class="{'borde-rojo' : errors.has('email')}" name="email" value="" v-validate="{ required:true, email:true, min:8, max:50, regex: /^[\w\.]{2,30}@[a-zA-Z]{2,15}\.[a-z]{2,4}(\.[a-z]{2,2})?$/ }"  placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contraseña" class="col-md-12 col-form-label text-md-left">Contraseña *</label>
                        <input v-model="contraseña" id="contraseña" type="password" class="form-control" :class="{'borde-rojo' : errors.has('contraseña')}" name="contraseña" value="" v-validate="'required'"  placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nivel" class="col-md-4 col-form-label text-md-left">Nivel Intereses *</label>
                        <select @change="nivelSelect($event)" id="nivel" type="text" class="form-control" :class="{'borde-rojo' : errors.has('nivel')}" name="nivel" value="" v-validate="'required'" >
                            <option value="">Selecciona una opción</option>
                            <option v-for="nivel in niveles" :key="nivel.id" :value="nivel.id">{{nivel.descripcion}}</option>
                        </select>  
                    </div>
                    <div class="form-group col-md-12" v-if="nivelSelected != 1 && nivelSelected != ''">
                        <label for="nivel" class="col-md-4 col-form-label text-md-left">Carrera *</label>
                        <select @change="carreraSelect($event)" id="carrera" type="text" class="form-control" name="carrera" value="" v-validate="'required'" :class="{'borde-rojo' : errors.has('carrera')}">
                            <option value="">Selecciona una opción</option>
                            <option v-for="carrera in carreras" :key="carrera.id" :value="carrera.id">{{carrera.descripcion}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name:"FormularioComponent",
        data() {
            return {
                nombre:"",
                apellido_paterno:"",
                apellido_materno:"",
                edad:"",
                contraseña:"",
                email:"",            
                nivelSelected:"",
                carreraSelected:"",    
                generoSelected:"",
                estado_civilSelected:"",
                generos: [],
                edosCiviles: [],
                niveles: [],
                carreras: []
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
            this.getGeneros();
            this.getEdosCiviles();
            this.getNiveles();
        },
        methods:{
            registrar(){
                this.$validator.validateAll().then(result => {
                    var data = {
                        "nombre":this.nombre,
                        "apellido_paterno":this.apellido_paterno,
                        "apellido_materno":this.apellido_materno,
                        "edad":this.edad,
                        "estado_civil":this.estado_civilSelected,
                        "email":this.email,
                        "contraseña":this.contraseña,
                        "nivel":this.nivelSelected,
                        "carrera":this.carreraSelected,
                        "genero":this.generoSelected
                    }
                    console.log(data)
                    if(result){
                        axios.post(`/usuarios`,{
                            data:data
                        })
                        .then(resp => {
                           window.location.href = '/home'
                        }).catch(error => {
                            alert('¡Hubo un problema, intenta de nuevo!')
                        })
                    }
                })
                
            },
            generoSelect(event){
                this.generoSelected = event.target.value;
            },
            estado_civilSelect(event){
                this.estado_civilSelected = event.target.value;
            },
            nivelSelect(event){
                this.nivelSelected = event.target.value;
                this.getCarreras();
            },
            carreraSelect(event){
                this.carreraSelected = event.target.value;
            },
            getGeneros(){
                axios.get("/get-generos")
                .then(resp => {
                    this.generos = resp.data.generos;
                })
            }, 
            getEdosCiviles() {
                axios.get("/get-edosciviles")
                .then(resp => {
                    this.edosCiviles = resp.data.edosCiviles;
                })
            },
            getNiveles() {
                axios.get("/get-niveles")
                .then(resp => {
                    this.niveles = resp.data.niveles;
                })
            },
            getCarreras(event) {
                axios.get(`/get-carreras/${this.nivelSelected}`)
                .then(resp => {
                    this.carreras = resp.data.carreras;
                })
            }
        }
    }
</script>
<style type="text/css">
    .borde-rojo{
        border-color: rgb(220, 20, 6);
        box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px rgba(220, 20, 6,0.6);
        outline: 0 none;
    }
</style>