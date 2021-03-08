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
					<button @click.prevent="submit" id="botonSorteo"
					        class="px-3 py-2 bg-pink-600 text-gray-50 text-base font-semibold uppercase rounded-lg hover:bg-pink-500 focus:outline-none focus:ring-0">
						comenzar
					</button>
					<div class="flex text-6xl" id="output" v-if="ganador"></div>
				</div>

				<ModalGanador :show="show" :ganador="ganador"/>

			</div>
		</div>
	</SorteoLayout>
</template>

<script>
import SorteoLayout from "@/Layouts/SorteoLayout";
import ModalGanador from "@/Pages/Componentes/ModalGanador";

export default {
    props: {
        "participantes": null
    },
    data() {
        return {
            show: false,
            ganador: null
        }
    },

    components: {
        ModalGanador,
        SorteoLayout,
    },

    methods: {
        submit() {
            axios.post("/sorteo").then((res) => {
                let ganador = res.data
                console.log(ganador.dni.toString().slice(ganador.dni.toString().length - 4))
                this.ganador = ganador.nombre + " " + ganador.apellido + " - " + ganador.dni.toString().slice(ganador.dni.toString().length - 4)
                this.start();
            })
        },
        start() {
            let boton = document.getElementById("botonSorteo");
            boton.style.display = "none";
            var vue = this

            let theLetters = "abcdefghijklmnopqrstuvwxyz123456789"; //You can customize what letters it will cycle through
            let ctnt = this.ganador; // Your text goes here
            let speed = 75; // ms per frame
            let increment = 8; // frames per step. Must be >2

            let clen = ctnt.length;
            let si = 0;
            let stri = 0;
            let block = "";
            let fixed = "";

            //Call self x times, whole function wrapped in setTimeout

            (function rustle(i) {
                setTimeout(function () {
                        if (--i) {
                            rustle(i);
                        }
                        else
                            vue.show = true
                        nextFrame(i);
                        si = si + 1;
                    },
                    speed);
            })
            (clen * increment + 1);

            function nextFrame(pos) {
                for (let i = 0; i < clen - stri; i++) {
                    //Random number
                    let num = Math.floor(theLetters.length * Math.random());
                    //Get random letter
                    let letter = theLetters.charAt(num);
                    block = block + letter;
                }

                if (si == (increment - 1)) {
                    stri++;
                }

                if (si == increment) {
                    // Add a letter;
                    // every speed*10 ms
                    fixed = fixed + ctnt.charAt(stri - 1);
                    si = 0;
                }

                let x = document.getElementById("output")
                x.innerHTML = (fixed + block);
                block = "";
            }
        },
    },
	mounted() {
        this.ganador = null
    }
}
</script>

<style lang="scss" scope>

#output {
  /* The command I know best. */
  text-transform: uppercase;
  color: #fe0070;
  font-family: Verdana, sans-serif;
  font-weight: bold;
  text-align: left;
  text-shadow: 0.08em 0em #c0bcbbc7;
}
</style>
