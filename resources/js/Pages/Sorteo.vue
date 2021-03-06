<template>
<SorteoLayout>
    <div class="flex justify-center mt-2 mb-auto ">
            <div class="bg-gray-50 rounded mb-4 p-4">
                <img class="h-80 max-h-full" v-bind:src=" '/img/DíaDeLaMujer.svg' " alt="">

            <hr class="bg-pink-600" style="height:2px;border-width:0">

            <h2 class="text-4xl font-bold text-center mx-auto text-black mt-2 ">Bienvenidos al Sorteo </h2>      

            <div class="flex flex-row mx-auto lg:pl-64 opacity-75 mt-2 mb-4 p-5">
                <div class="text-2xl font-bold text-center text-black mb-2 mt-4">
                    Mucha Suerte!
                </div>
                <div class="">
                    <img class="w-12 ml-8" v-bind:src = "'/img/Suerte.svg'" alt="">
                </div>
            </div>

             <hr class="bg-pink-600" style="height:2px;border-width:0">

            <div class="flex justify-center py-8">
                <button @click="start()" id="botonSorteo" class="px-3 py-2 bg-pink-600 text-gray-50 text-base font-semibold uppercase rounded-lg hover:bg-pink-500 focus:outline-none focus:ring-0">
                    comenzar
                </button>
                <div id="output"></div>
            </div> 

            <ModalGanador :max-width="'md'" :show="show" @close="closeModal">
                <h1 class="text-4xl font-bold text-center mx-auto text-black mb-2">FELICIDADES !! </h1>
                <h3 class="text-4xl font-bold text-center mx-auto text-black mb-2"> Maria perez </h3>
                <div class="p-4 bg-gray-50">
                    <img class="w-80 mx-auto" v-bind:src = "'/img/Ok.svg'" alt="">
                </div>
            </ModalGanador>
            
            </div>
        </div>
</SorteoLayout>
</template>

<script>
import ModalGanador from "@/Jetstream/ModalGanador";
import SorteoLayout from "@/Layouts/SorteoLayout";

    export default {
        data() {
            return {
                show: false,
            }
        },

        components: {
            ModalGanador,
            SorteoLayout,
        },

        methods: {
                    start () {
                            var boton = document.getElementById("botonSorteo");
                            boton.style.display = "none";

                            var theLetters = "abcdefghijklmnopqrstuvwxyz&^+=-"; //You can customize what letters it will cycle through
                            var ctnt = "Maria Perez"; // Your text goes here
                            var speed = 50; // ms per frame
                            var increment = 8; // frames per step. Must be >2

                            var clen = ctnt.length;       
                            var si = 0;
                            var stri = 0;
                            var block = "";
                            var fixed = "";

                            //Call self x times, whole function wrapped in setTimeout

                            (function rustle (i) {          
                                setTimeout(function () {
                                    if (--i){
                                        rustle(i);
                                        }
                                    nextFrame(i);
                                    si = si + 1;        
                                }, 
                                speed);
                            }) 
                            (clen*increment+1);
                            



                            function nextFrame(pos){
                                for (var i=0; i<clen-stri; i++) {
                                    //Random number
                                    var num = Math.floor(theLetters.length * Math.random());
                                    //Get random letter
                                    var letter = theLetters.charAt(num);
                                    block = block + letter;
                                }

                                if (si == (increment-1)){
                                    stri++;
                                }

                                if (si == increment){
                                // Add a letter; 
                                // every speed*10 ms
                                fixed = fixed +  ctnt.charAt(stri - 1);
                                si = 0;
                                }
                            
                                var x = document.getElementById("output")
                                x.innerHTML= (fixed + block);
                                block = "";
                            }


                    },

            abrirModal () {
                this.show = true
            },

            closeModal () {
                this.show = false
            },
        }
    }
</script>

<style lang="scss" scope>

#output{
  /* The command I know best. */
  text-transform:uppercase;
  color:#fe0070;
  font-family: Verdana, sans-serif;
  font-size:4em;
  font-weight:bold;
  text-align:left;
  text-shadow:0.08em 0em #c0bcbbc7;
}
</style>
