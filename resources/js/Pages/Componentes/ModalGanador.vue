<template>
	<Modal :max-width="'3xl'"  :show="show">
		<div class="p-4 bg-gray-50">
            <div class="text-4xl md:text-5xl text-center font-extrabold mb-14 uppercase">
                <img class="w-12 mr-6 inline" v-bind:src="'/img/fuegos-artificiales.svg'" alt="">
                ¡Felicidades!
                <img class="w-12 ml-6 inline" v-bind:src="'/img/fuegos-artificiales2.svg'" alt="">
            </div>
            <div class="grid grid-cols-3 gap-2 ml-10">
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Secadora de cabello</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Parlante</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Bicicleta de dama</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Horno</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Juguera</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Licuadora</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Secarropa</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Heladera</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Exprimidora</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Sandwichera</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Ventilador</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Cafetera</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Pava eléctrica</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Planchita</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Tablet</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Secadora de cabello</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Parlante</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Bicicleta de dama</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Horno</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Juguera</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Licuadora</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Secarropa</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Heladera</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Exprimidora</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Sandwichera</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Ventilador</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Cafetera</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Pava eléctrica</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Planchita</h1>
                </div>
                <div class="flex flex-row">
                    <img class="w-10 mr-2 inline" v-bind:src="'/img/surprise.svg'" alt="">
                    <h1 class="text-4xl md:text-2xl text-left font-bold mb-3 pt-4">Paulina Belén Fernandez Colombo - 0607 - Tablet</h1>
                </div>
            </div>
			<inertia-link :href="'/sorteos'" preserve-scroll class="flex">
				<button class="px-3 py-2 mt-8 bg-pink-600 text-gray-50 text-base font-semibold uppercase rounded-lg hover:bg-pink-500 focus:outline-none focus:ring-0 mx-auto">
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
