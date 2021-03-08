<template>
    <SorteoLayout>
        <div class="flex justify-center mt-2 mb-auto">
            <div class="shadow-lg rounded mb-4 p-4">
                <img class="w-72 mx-auto " v-bind:src = "'/img/DíaDeLaMujer.svg'" alt="">
                <h1 class="text-4xl font-bold text-center mx-auto text-black mb-2">Listado de productos</h1>
                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">

                    <div v-if="false">
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
                            <tr>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    ID
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Nombre
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Cantidad
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Lugar de retiro
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Ganador
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr  class="border-b hover:bg-pink-100">
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">ID</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">Descripcion</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">Cantidad</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">Lugar de retiro</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">Ganador</div>
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


    data() {
        return {
            productos: {
                id: null,
                descripcion: null,
                cantidad: null,
                ganador: null,
            },
        }
    },
}
</script>
