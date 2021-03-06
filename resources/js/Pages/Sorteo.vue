<template>
		<div class="flex justify-center bg-pink-100 mt-2 mb-auto">
            <div class="bg-gray-50 shadow-lg rounded mb-4 p-4">
                <img class="h-80 max-h-full" v-bind:src=" '/img/DíaDeLaMujer.svg' " alt="">

            <hr class="bg-pink-600" style="height:2px;border-width:0">

            <h1 class="text-4xl font-bold text-center mx-auto text-black mt-2 ">Bienvenidos al Sorteo </h1>      

            <div class="flex flex-row mx-auto pl-64 opacity-75 mt-2 mb-4">
                <div class="text-2xl font-bold text-center text-black mb-2 mt-4">
                    Mucha Suerte!
                </div>
                <div class="">
                    <img class="w-16 ml-8" v-bind:src = "'/img/Suerte.svg'" alt="">
                </div>
            </div>

            <hr class="bg-pink-600" style="height:2px;border-width:0">

            <div class="flex flex-row">
                <div class="bg-pink-400 rounded-lg"> letras al azar  </div>
                <div class="">imagen </div>
            </div>

            <ModalGanador :max-width="'md'" :show="show" @close="closeModal">
                <h1 class="text-4xl font-bold text-center mx-auto text-black mb-2">FELICIDADES !! </h1>
                <h3 class="text-4xl font-bold text-center mx-auto text-black mb-2"> Maria perez </h3>
                <div class="p-4 bg-gray-50">
                    <img class="w-80 mx-auto" v-bind:src = "'/img/Ok.svg'" alt="">
                </div>
            </ModalGanador>

            <div class="flex justify-center mt-6">
                <button @click="abrirModal()" class="px-3 py-2 bg-pink-600 text-gray-50 text-base font-semibold uppercase rounded-lg hover:bg-pink-500 focus:outline-none focus:ring-0">Sortear</button>
            </div>
            
            </div>
        </div>
</template>

<script>
import SorteoLayout from "@/Layouts/FormularioLayout";
import ModalGanador from "@/Jetstream/ModalGanador";

    export default {

        data() {
            return {
                show: false,
                nombre: 'maria perez'
                
            }
        },

        components: {
            SorteoLayout,
            ModalGanador,
        },

        methods: {
            abrirModal () {
                this.show = true
            },

            closeModal () {
                this.show = false
            },
    }
    }

</script>

<style>

</style>