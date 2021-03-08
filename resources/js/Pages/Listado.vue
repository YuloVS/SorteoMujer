<template>
    <FormularioLayout>
        <div class="flex justify-center mt-2 mb-auto">
            <div class="shadow-lg rounded mb-4 p-4">

                <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">

                    <div v-if="false">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="bg-navbar">
                            <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                                <div class="flex items-center justify-between flex-wrap">

                                    <div class="w-0 flex-1 flex items-center">
                                            <span class="flex p-2 rounded-lg">
                                                <i class="text-3xl h-14 w-14 text-white fas fa-user-times"></i>
                                            </span>
                                        <p class="ml-3 text-2xl font-medium text-white">
                                            No se encontraron resultados
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-else>
                        <table class="min-w-full lg:divide-y divide-gray-400">
                            <thead class="bg-navbar text-center">
                            <tr>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Usuario/DNI
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Email/Teléfono
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Razon Social/Descripción
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Dirección/Localidad
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Teléfono
                                </th>
                                <th class="font-bold text-xs font-medium text-white uppercase text-left p-3 px-5">
                                    Acciones
                                </th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr  :key="row.id" class="border-b hover:bg-pink-500">
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">{{ row.apellido }}</div>
                                    <div class="text-sm text-gray-500">{{ row.nombre }}</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900"> {{ row.dni}}</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">{{ row.direccion}}</div>
                                    <div class="text-sm text-gray-500">{{ row.telefono}}</div>
                                </th>

                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900">{{ row.email}}</div>
                                </th>
                                <th class="text-left p-3 px-5">
                                    <div class="text-sm text-gray-900"></div>
                                </th>
                                <td class="text-left p-3 px-5">

                                </td>
                            </tr>
                            </tbody>
                        </table>



                    </div>
                </div>

            </div>
        </div>
    </FormularioLayout>
</template>


<script>
import FormularioLayout from "@/Layouts/FormularioLayout";
import Label from "@/Jetstream/Label";
export default {
    components: {
        Label,
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
            },
            form: this.$inertia.form ({
                dni: null,
                nombre: null,
                apellido: null,
                telefono : null,
                direccion: null,
                email : null,
            }),
        }
    },

    methods: {

    },
}
</script>
