<template class="bg-gray-100">

    <div class="flex justify-center bg-gray-100 pt-4 pb-4 h-5xl">

        <div class="lg:w-5xl bg-white shadow-md rounded  p-6 mt-4 my-auto">
            <div class="col-span-2 mb-5">
                <div class="text-center inline-block text-4xl font-bold text-green-900">
                    Su inscripción ha sido registrada.
                </div>
            </div>
            <div class=" flex justify-center border-t mt-6 pt-3">
                <button @click="volver()" class="rounded text-gray-100 px-3 py-3 bg-green-700 hover:shadow-inner hover:bg-green-900 transition-all duration-300">
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                    Volver
                </button>
            </div>
        </div>
    </div>

</template>


<script>
export default {
    components: {

    },


    methods: {
        volver() {
            this.$inertia.get('/formulario')
        },
    }
}
</script>
