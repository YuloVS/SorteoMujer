<template>
	<FormularioLayout>
		<div class="flex justify-center bg-gray-50 mt-2 mb-auto">
            <div class="bg-gray-50 shadow-lg rounded mb-4 p-4">
                <img class="w-72 mx-auto " v-bind:src = "'/img/DíaDeLaMujer.svg'" alt="">
                <h1 class="text-4xl font-bold text-center mx-auto text-black mb-2">Participá del sorteo</h1>
                <p class="text-gray-400 text-base font-medium text-center mx-auto mb-8">Completá el formulario para participar</p>
                <form @submit.prevent="submit">
                    <div class="flex flex-col md:flex-row">
                        <div class="flex flex-col">
                            <label class="text-base font-bold text-black">DNI <span class="text-gray-500 text-sm font-medium">(Sin puntos)</span></label>
                            <input v-model="form.dni"
                                   id="dni"
                                   type="text"
                                   class="px-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                   autofocus
                                   required
                                   maxlength="8"
                                   minlength="7"
                            >
                            <span class="w-72 md:w-52 text-red-500" v-if="form.errors.dni" v-text="form.errors.dni"></span>
                        </div>
                        <div class="flex flex-col mt-3 md:mt-0 md:ml-6">
                            <label class="text-base font-bold text-black">Nombre</label>
                            <input v-model="form.nombre"
                                   id="nombre"
                                   type="text"
                                   class="px-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                   required
                            >
                            <span class="md:w-52 text-red-500" v-if="form.errors.nombre" v-text="form.errors.nombre"></span>
                        </div>
                        <div class="flex flex-col mt-3 md:mt-0 md:ml-6">
                            <label class="text-base font-bold text-black">Apellido</label>
                            <input v-model="form.apellido"
                                   id="apellido"
                                   type="text"
                                   class="px-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                   required
                            >
                            <span class="md:w-52 text-red-500" v-if="form.errors.apellido" v-text="form.errors.apellido"></span>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row mt-3 md:mt-6">
                        <div class="flex flex-col">
                            <label class="text-base font-bold text-black">Teléfono <span class="text-gray-500 text-sm font-medium">(Sin 0 ni 15)</span></label>
                            <input v-model="form.telefono"
                                   id="telefono"
                                   type="text"
                                   class="px-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                   required
                                   minlength="9"
                                   maxlength="10"
                            >
                            <span class="md:w-52 text-red-500" v-if="form.errors.telefono" v-text="form.errors.telefono"></span>
                        </div>
                        <div class="flex flex-col mt-3 md:mt-0 md:ml-6">
                            <label class="text-base font-bold text-black">Dirección</label>
                            <input v-model="form.direccion"
                                   id="direccion"
                                   type="text"
                                   class="px-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                   required
                                   pattern="[a-zA-Z0-9 ]+"
                                   title="Solo letras y números"
                            >
                            <span class="md:w-52 text-red-500" v-if="form.errors.direccion" v-text="form.errors.direccion"></span>
                        </div>
                        <div class="flex flex-col mt-3 md:mt-0 md:ml-6">
                            <label class="text-base font-bold text-black">Email</label>
                            <input v-model="form.email"
                                   id="email"
                                   type="email"
                                   class="px-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                   required
                            >
                            <span class="md:w-52 text-red-500" v-if="form.errors.email" v-text="form.errors.email"></span>
                        </div>
                    </div>
                    <div class="flex justify-center mt-6">
                        <button @submit="this.form" class="px-3 py-2 bg-pink-600 text-gray-50 text-base font-semibold uppercase rounded-lg hover:bg-pink-500 focus:outline-none focus:ring-0">Registrarse</button>
                    </div>
                </form>
            </div>
		</div>
		<Modal :max-width="'sm'" :show="form.recentlySuccessful">
            <div class="p-4 bg-gray-50">
                <img class="w-80 mx-auto" v-bind:src = "'/img/Ok.svg'" alt="">
            </div>
		</Modal>
	</FormularioLayout>
</template>


<script>
import FormularioLayout from "@/Layouts/FormularioLayout";
import Label from "@/Jetstream/Label";
import Modal from "@/Jetstream/Modal";
export default {
    components: {
        Modal,
        Label,
        FormularioLayout,
    },

    data() {
        return {
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
        submit() {
                this.form.post('/formulario', {
                    preserveScroll: true,
                    onSuccess: () => {
                        this.form.reset();
                    }
                })
        },
    },
}
</script>
