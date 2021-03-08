<template>
    <SorteoLayout>
        <div class="flex justify-center mt-2 mb-auto">
            <div class="shadow-lg rounded mb-4 p-4">
                <img class="w-72 mx-auto " v-bind:src = "'/img/DíaDeLaMujer.svg'" alt="">
                <h1 class="text-4xl font-bold text-center mx-auto text-black mb-2">Ganadores</h1>
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">

                    <div v-if="this.ganadores.length === 0">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="bg-navbar">
                            <div class=" mx-auto py-3 px-3 sm:px-6 lg:px-8">
                                <div class="flex items-center justify-between flex-wrap">

                                    <div class="flex-1 flex items-center">
                                        <p class="ml-3 text-2xl font-medium">
                                            Todavía no se ha realizado ningún sorteo.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-else>
                        <table class="min-w-full lg:divide-y divide-gray-400 overflow">
                            <thead class="bg-navbar text-center bg-pink-500">
                            <tr class="text-center">
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Sorteo
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Participante
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    DNI
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Telefono/Direccion
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Email
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Premio
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Estado
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="row in this.ganadores" class="border-b hover:bg-pink-100">
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900"> {{ row.ganador}}</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">{{ row.apellido }}</div>
                                    <div class="text-sm text-gray-500">{{ row.nombre }}</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900"> {{ row.dni}}</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">{{ row.telefono}}</div>
                                    <div class="text-sm text-gray-500">{{ row.direccion}}</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">{{ row.email}}</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">{{ row.premio}}</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">Reclamado</div>
                                </th>
                            </tr>
                            </tbody>
                        </table>



                    </div>
                </div>

            </div>
        </div>
    </SorteoLayout>
</template>


<script>
import Label from "@/Jetstream/Label";
import SorteoLayout from "@/Layouts/SorteoLayout";
export default {
    components: {
        SorteoLayout,
        Label,
    },

    props:{
        ganadores:null
    },

    data() {
        return {
            row: {
                dni: null,
                nombre: null,
                apellido: null,
                telefono : null,
                direccion: null,
                email : null,
                premio : null,
                reclamado : null,
            },
        }
    },
    mounted() {
        console.log(this.ganadores)
    }
}
</script>
