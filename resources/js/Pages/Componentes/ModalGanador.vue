<template>
	<Modal :show="show">
		<div class="p-4 bg-gray-50">
			<img class="w-full mx-auto" v-bind:src = "'/img/Celebration.gif'" alt="">
			<h1 class="text-4xl md:text-6xl text-center font-extrabold">¡Felicidades!</h1>
			<h1 class="text-4xl md:text-6xl text-center font-extrabold mb-5" v-text="ganador"></h1>
			<inertia-link :href="'/sorteos'" preserve-scroll class="flex">
				<button class="px-3 py-2 bg-pink-600 text-gray-50 text-base font-semibold uppercase rounded-lg hover:bg-pink-500 focus:outline-none focus:ring-0 mx-auto">
					NUEVO SORTEO
				</button>
			</inertia-link>

		</div>
	</Modal>
</template>

<script>
import Modal from "@/Jetstream/Modal";
export default {
    name: "ModalGanador",
    components: {Modal},
	props: {
        show: false,
		ganador: null
	},
}
</script>