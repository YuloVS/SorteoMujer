<template>
	<AppLayout>
		<div class="grid grid-cols-3 gap-4 px-6">
			<div class="col-span-2 mt-3">
				<div class="text-center inline-block text-4xl font-bold text-green-900">
					Inscripción
				</div>
			</div>
			<div class="flex justify-end mt-3">
				<!--<img class="w-32 inline-block" v-bind:src = " '/images/añadir_usuario.svg' " alt="">-->
			</div>
		</div>

		<hr class="bg-navbar mt-4" style="height:2px;border-width:0">

		<div class="flex justify-center bg-gray-100">
			<div class="bg-white shadow-md rounded mb-10 p-6 mt-4">
				<form @submit.prevent="submit">
					<div class="grid grid-cols-1 gap-4">
						<div class="relative flex w-full flex-wrap items-stretch mb-3">
                             <span class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-12">
                                <i class="fa fa-address-card-o" aria-hidden="true"></i>
                             </span>
							<label for="dni" class="font-semibold text-green-900 ">DNI</label><span class="text-gray-400 ml-1">(sin puntos)</span>
							<input v-model="form.dni" id="dni" type="text" placeholder="..." class="border focus-within:border-green-600 px-6 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm outline-none focus:outline-none focus:shadow-outline w-full ">
							<span class="my-0 text-red-500" v-if="form.errors.dni" v-text="form.errors.dni"></span>
						</div>


						<div class="relative flex w-full flex-wrap items-stretch mb-3">
							<label for="nombre" class="font-semibold text-green-900 mr-7">Nombre</label>
							<span class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-12">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </span>
							<input v-model="form.nombre" id="nombre" type="text" placeholder="..." class="border focus-within:border-green-600 px-6 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm outline-none focus:outline-none focus:shadow-outline w-full "/>
                            <span class="my-0 text-red-500" v-if="form.errors.nombre" v-text="form.errors.nombre"></span>
						</div>

						<div class="relative flex w-full flex-wrap items-stretch mb-3">
							<label for="apellido" class="font-semibold text-green-900 mr-7">Apellido</label>
							<span class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-12">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </span>
							<input v-model="form.apellido" id="apellido" type="text" placeholder="..." class="border focus-within:border-green-600 px-6 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm outline-none focus:outline-none focus:shadow-outline w-full "/>
                            <span class="my-0 text-red-500" v-if="form.errors.apellido" v-text="form.errors.apellido"></span>
						</div>

						<div class="grid  gap-4">
							<div class="relative flex w-full flex-wrap items-stretch mb-3">
								<label for="telefono" class="font-semibold text-green-900 mr-7">Teléfono</label>
								<span class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-12">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
								<input v-model="form.telefono" id="telefono" type="text" placeholder="..." class="border focus-within:border-green-600 px-6 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm outline-none focus:outline-none focus:shadow-outline w-full "/>
								<span class="my-0 text-red-500" v-if="form.errors.telefono" v-text="form.errors.telefono"></span>
							</div>
						</div>

                        <div class="grid  gap-4">
                            <div class="relative flex w-full flex-wrap items-stretch mt-3 mb-3">
                                <label for="direccion" class="font-semibold text-green-900 mr-7">Dirección</label>
                                <span class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-12">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span>
                                <input v-model="form.direccion" id="direccion" type="text" placeholder="..." class="border focus-within:border-green-600 px-6 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm outline-none focus:outline-none focus:shadow-outline w-full "/>
                                <span class="my-0 text-red-500" v-if="form.errors.direccion" v-text="form.errors.direccion"></span>
                            </div>
                        </div>

                        <div class="grid  gap-4">
                            <div class="relative flex w-full flex-wrap items-stretch mt-3 mb-3">
                                <label for="email" class="font-semibold text-green-900 mr-7">Email</label>
                                <span class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-12">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </span>
                                <input v-model="form.email" id="email" type="text" placeholder="..." class="border focus-within:border-green-600 px-6 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm outline-none focus:outline-none focus:shadow-outline w-full "/>
                                <span class="my-0 text-red-500" v-if="form.errors.email" v-text="form.errors.email"></span>
                            </div>
                        </div>
					</div>

					<div class=" flex justify-center border-t mt-6 pt-3">
						<button @submit="this.form" class="rounded text-gray-100 px-3 py-3 bg-green-700 hover:shadow-inner hover:bg-green-900 transition-all duration-300">
							<i class="fa fa-check-square-o" aria-hidden="true"></i>
							Registrar
						</button>
					</div>
				</form>

			</div>
		</div>
	</AppLayout>
</template>


<script>
import AppLayout from "@/Layouts/AppLayout";
export default {
    components: {
        AppLayout
    },

    data() {
        return {
            form: this.$inertia.form ({
                dni: null,
                nombre: null,
                apellido: null,
                telefono : null,
                email : null,
            }),
        }
    },

    methods: {

        submit() {
                this.form.post('/formulario')
        },
    }
}
</script>
