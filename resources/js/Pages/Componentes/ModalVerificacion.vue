<template>
	<Modal :show="show">
        <div v-if="verificar == true">
            <div class="px-4 bg-gray-50">
			    <img class="w-76 mx-auto" v-bind:src = "'/img/Celebration.gif'" alt="">
                <h1 class="text-4xl md:text-5xl text-center font-extrabold ">¡Felicidades!</h1>
                <h1 class="text-4xl md:text-5xl text-center font-extrabold mb-8"> Maria Rosario de los Antoñas</h1>

                <hr class="bg-pink-600 mb-3" style="height:2px;border-width:0">

                <div class="flex md:flex-row flex-col px-6">
                    <div><p class=" text-left text-xl md:text-2xl  font-extrabold">Ganaste el premio de:</p></div>
                    <div><p class="text-xl md:text-2xl text-left font-extrabold text-pink-500 md:ml-4">super heladera</p></div>
                </div>

                <div class="flex md:flex-row flex-col px-6">
                    <div><p class="text-left text-xl md:text-2xl  font-extrabold ">Podes retirarlo en:</p></div>
                    <div><p class="text-xl md:text-2xl text-left font-extrabold text-pink-500 md:ml-4">la casa de eña</p></div>
                </div>

                <div class="flex md:flex-row flex-col px-6">
                    <div><p class="text-left text-xl md:text-2xl  font-extrabold ">En el siguiente horario: </p></div>
                    <div><p class="text-xl md:text-2xl text-left font-extrabold text-pink-500 md:ml-4">14:00 a 14:01 horas</p></div>
                </div>

                <hr class="bg-pink-600 mt-3" style="height:2px;border-width:0">  
                
                <h1 class="text-xl md:text-3xl text-center font-extrabold py-4">¡Gracias por participar!</h1>
		    </div>
        </div>

        <div v-else>
            <div class="p-4 bg-gray-50">
			    <img class="w-full mx-auto" v-bind:src = "'/img/Celebration.gif'" alt="">
                <h1 class="text-4xl md:text-5xl text-center font-extrabold">En esta oportunidad no ganaste, pero sigue intentando! </h1>
                <!--<h1 class="text-4xl md:text-5xl text-center font-extrabold mb-5" v-text="ganador"></h1>-->
		    </div>
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
		ganador: null,
        verificar: null,
	},
}
</script>