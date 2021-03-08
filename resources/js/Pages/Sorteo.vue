<template>
	<SorteoLayout>
		<div class="flex justify-center mt-2 mb-auto ">
			<div class="bg-gray-50 rounded mb-4 p-4 w-full">
				<img class="h-80 max-h-full mx-auto" v-bind:src=" '/img/DíaDeLaMujer.svg' " alt="">

				<hr class="bg-pink-600" style="height:2px;border-width:0">

				<h2 class="text-6xl font-bold text-center mx-auto text-black mt-7 uppercase">Bienvenidos al Sorteo </h2>

				<div class="text-4xl font-bold text-center mx-auto text-black mt-5 mb-7 uppercase">
					<img class="w-12 mr-8 inline" v-bind:src="'/img/Suerte.svg'" alt="">
					¡Mucha Suerte!
					<img class="w-12 ml-8 inline" v-bind:src="'/img/Suerte.svg'" alt="">
				</div>

				<hr class="bg-pink-600" style="height:2px;border-width:0">

				<div class="flex justify-center py-8">
					<button @click.prevent="submit"
					        class="px-3 py-2 bg-pink-600 text-gray-50 text-base font-semibold uppercase rounded-lg hover:bg-pink-500 focus:outline-none focus:ring-0"
					        :disabled="submited"
					>
						comenzar
					</button>
				</div>

				<ModalGanador :show="show" :ganadores="ganadores" />
				<Modal :show="loading" :max-width="'sm'">
					<div class="bg-gray-50">
						<img class="mx-auto" src="/img/loading.gif" alt="">
						<h1 class="text-3xl md:text-4xl text-center font-extrabold pb-4">Sorteando...</h1>
					</div>

				</Modal>

			</div>
		</div>
	</SorteoLayout>
</template>

<script>
import SorteoLayout from "@/Layouts/SorteoLayout";
import ModalGanador from "@/Pages/Componentes/ModalGanador";
import Modal from "@/Jetstream/Modal";

export default {
    data() {
        return {
            show: false,
            ganadores: null,
	        submited: false,
	        loading: false
        }
    },

    components: {
        Modal,
        ModalGanador,
        SorteoLayout,
    },

    methods: {
        submit() {
            this.submited = true
	        this.loading = true
            axios.post("/sorteo").then((res) => {
                this.loading = false
                this.ganadores = res.data
	            this.show = true
            })
        },
    },
	mounted() {
        this.ganadores = null
		this.submited = false
		this.loading = false
    }
}
</script>
