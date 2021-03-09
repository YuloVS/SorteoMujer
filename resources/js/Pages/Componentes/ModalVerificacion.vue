<template>
	<Modal :show="show" :closeable="closeable" @close="close">

        <div v-if="ganador">
            <div class="px-4 bg-gray-50">
			    <img class="w-76 mx-auto" v-bind:src = "'/img/Celebration.gif'" alt="">
                <h1 class="text-4xl md:text-5xl text-center font-extrabold ">¡Felicidades!</h1>
                <h1 class="text-4xl md:text-5xl text-center font-extrabold mb-8" v-text="ganador.nombre + ' ' + ganador.apellido"></h1>

                <hr class="bg-pink-600 mb-3" style="height:2px;border-width:0">

                <div class="flex md:flex-row flex-col px-6">
                    <div><p class=" text-left text-xl md:text-2xl  font-extrabold">Ganaste: </p></div>
                    <div><p class="text-xl md:text-2xl text-left font-extrabold text-pink-500 md:ml-4" v-text="ganador.producto.descripcion"></p></div>
                </div>

                <div class="flex flex-col px-6">
                    <div><p class="text-left text-xl md:text-2xl  font-extrabold ">Podes retirarlo en:</p></div>
                    <div><p class="text-xl md:text-2xl text-left font-extrabold text-pink-500" v-text="ganador.producto.lugar + ' el 10/03 de 8 a 13 hs'"></p></div>
                </div>

                <hr class="bg-pink-600 mt-3" style="height:2px;border-width:0">

                <h1 class="text-xl md:text-3xl text-center font-extrabold py-4">¡Gracias por participar!</h1>
		    </div>
        </div>



        <div v-else>
            <div class="p-4 bg-gray-50">
			    <img class="w-76 mx-auto" v-bind:src = "'/img/perder.gif'" alt="">
                <h1 class="text-4xl md:text-5xl text-center font-extrabold pb-4">No ganaste esta vez</h1>
                <h1 class="text-xl md:text-3xl text-center font-extrabold py-3">¡Gracias por participar!</h1>
		    </div>
        </div>
        <div class="flex flex-row justify-center">
            <button @click="close" class="px-3 py-2 mt-2 mb-4 bg-pink-600 text-gray-50 text-base font-semibold uppercase rounded-lg hover:bg-pink-500 focus:outline-none focus:ring-0 mx-auto">
                Salir
            </button>
        </div>
	</Modal>
</template>

<script>
import Modal from "@/Jetstream/Modal";
export default {
    name: "ModalGanador",

    emits: ['close'],
    components: {Modal},

	props: {
        show: false,
		ganador: null,
        closeable: {
                default: true
        },
	},

    methods: {
        close() {
                this.$emit('close')
            },
    }
}
</script>
