<template>
		<div class="flex justify-center bg-pink-100 mt-2 mb-auto">
            <div class="bg-gray-50 shadow-lg rounded mb-4 p-4">
                <img class="h-80 max-h-full" v-bind:src=" '/img/DíaDeLaMujer.svg' " alt="">


            <div class="flex flex-col">
                <h1 class="text-4xl font-bold text-center mx-auto text-black mb-2">Bienvenidos al sorteo!! </h1>
                <h1 class="text-4xl font-bold text-center mx-auto text-black mb-2"> Mucha Suerte! :)  </h1>
            </div>

            <div class="flex flex-row">
                <div class="bg-pink-400 rounded-lg"> letras al azar  </div>
                <div class="">imagen </div>
            </div>

            <div class="flex justify-center mt-6">
                <button @click="abrirModal()" class="px-3 py-2 bg-pink-600 text-gray-50 text-base font-semibold uppercase rounded-lg hover:bg-pink-500 focus:outline-none focus:ring-0">Sortear</button>
            </div>
            
            </div>
        </div>
</template>

<script>
import SorteoLayout from "@/Layouts/FormularioLayout";
    export default {
            components: {
            SorteoLayout,
        },

        methods: {
            abrirModal () {
                sdfsd
            }
    }
    }

</script>

<style>

</style>