<template>
    <app-layout>
        <div class="container mx-auto">
            <img class="h-80 max-h-full" v-bind:src=" '/img/titulo.svg' " alt="">

            <dividor/>

            <nombresAleatorios/>

            <dividor/>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import dividor from '@/componentes/dividor'
import nombresAleatorios from '@/componentes/nombresAleatorios'

export default {
    components: {
        AppLayout,
        dividor,
        nombresAleatorios
    },

    methods: {
}

}
</script>

