<template>
	<FormularioLayout>
		<div class="flex justify-center mt-2 mb-auto">
            <div class="shadow-lg rounded mb-4 p-4">
                <img class="w-72 mx-auto " v-bind:src = "'/img/DíaDeLaMujer.svg'" alt="">
                <h1 class="text-4xl font-bold text-center mx-auto text-black mb-2">Participá del sorteo</h1>
                <p class="text-gray-400 text-base font-medium text-center mx-auto mb-8">Completá el formulario para participar</p>
                <form @submit.prevent="submit">
                    <div class="flex flex-col md:flex-row">
                        <div class="flex flex-col">
                            <label class="text-base font-bold text-black">DNI <span class="text-gray-500 text-sm font-medium">(Sin puntos)</span></label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg class="fill-current text-pink-300 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M150 271c-33.076 0-60 26.909-60 60v15c0 8.276 6.738 15 15 15h90c8.262 0 15-6.724 15-15v-15c0-33.091-26.924-60-60-60zM150 151c-16.553 0-30 13.462-30 30s13.447 30 30 30 30-13.462 30-30-13.447-30-30-30z"/><path d="M467 61H45C20.186 61 0 81.186 0 106v300c0 24.814 20.186 45 45 45h422c24.814 0 45-20.186 45-45V106c0-24.814-20.186-45-45-45zm-150 90h90c19.773 0 19.854 30 0 30h-90c-19.773 0-19.854-30 0-30zm-77 195c0 24.814-20.186 45-45 45h-90c-24.814 0-45-20.186-45-45v-15c0-49.629 40.371-90 90-90-33.076 0-60-26.909-60-60s26.924-60 60-60 60 26.909 60 60-26.924 60-60 60c49.629 0 90 40.371 90 90v15zm197 15H287c-19.773 0-19.854-30 0-30h150c19.773 0 19.854 30 0 30zm0-60H287c-19.773 0-19.854-30 0-30h150c19.773 0 19.854 30 0 30zm0-60H287c-19.773 0-19.854-30 0-30h150c19.773 0 19.854 30 0 30z"/></svg>
                                </div>
                                <input v-model="form.dni"
                                       id="dni"
                                       type="text"
                                       class="w-full -ml-10 pl-10 pr-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                       autofocus
                                       required
                                       maxlength="8"
                                       minlength="7"
                                >
                            </div>
                            <span class="w-72 md:w-52 text-red-500" v-if="form.errors.dni" v-text="form.errors.dni"></span>
                        </div>
                        <div class="flex flex-col mt-3 md:mt-0 md:ml-6">
                            <label class="text-base font-bold text-black">Nombre</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg class="fill-current text-pink-300 w-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.8 460.8"><path d="M230.432 0c-65.829 0-119.641 53.812-119.641 119.641s53.812 119.641 119.641 119.641 119.641-53.812 119.641-119.641S296.261 0 230.432 0zM435.755 334.89c-3.135-7.837-7.314-15.151-12.016-21.943-24.033-35.527-61.126-59.037-102.922-64.784-5.224-.522-10.971.522-15.151 3.657-21.943 16.196-48.065 24.555-75.233 24.555s-53.29-8.359-75.233-24.555c-4.18-3.135-9.927-4.702-15.151-3.657-41.796 5.747-79.412 29.257-102.922 64.784-4.702 6.792-8.882 14.629-12.016 21.943-1.567 3.135-1.045 6.792.522 9.927 4.18 7.314 9.404 14.629 14.106 20.898 7.314 9.927 15.151 18.808 24.033 27.167 7.314 7.314 15.673 14.106 24.033 20.898 41.273 30.825 90.906 47.02 142.106 47.02s100.833-16.196 142.106-47.02c8.359-6.269 16.718-13.584 24.033-20.898 8.359-8.359 16.718-17.241 24.033-27.167 5.224-6.792 9.927-13.584 14.106-20.898 2.611-3.135 3.133-6.793 1.566-9.927z"/></svg>
                                </div>
                                <input v-model="form.nombre"
                                       id="nombre"
                                       type="text"
                                       class="w-full -ml-10 pl-10 pr-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                       required
                                       pattern="[a-zA-ZÁáÉéÍíÓóÚúÑ ñ]+"
                                       title="Solo letras"
                                >
                            </div>
                            <span class="md:w-52 text-red-500" v-if="form.errors.nombre" v-text="form.errors.nombre"></span>
                        </div>
                        <div class="flex flex-col mt-3 md:mt-0 md:ml-6">
                            <label class="text-base font-bold text-black">Apellido</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg class="fill-current text-pink-300 w-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.8 460.8"><path d="M230.432 0c-65.829 0-119.641 53.812-119.641 119.641s53.812 119.641 119.641 119.641 119.641-53.812 119.641-119.641S296.261 0 230.432 0zM435.755 334.89c-3.135-7.837-7.314-15.151-12.016-21.943-24.033-35.527-61.126-59.037-102.922-64.784-5.224-.522-10.971.522-15.151 3.657-21.943 16.196-48.065 24.555-75.233 24.555s-53.29-8.359-75.233-24.555c-4.18-3.135-9.927-4.702-15.151-3.657-41.796 5.747-79.412 29.257-102.922 64.784-4.702 6.792-8.882 14.629-12.016 21.943-1.567 3.135-1.045 6.792.522 9.927 4.18 7.314 9.404 14.629 14.106 20.898 7.314 9.927 15.151 18.808 24.033 27.167 7.314 7.314 15.673 14.106 24.033 20.898 41.273 30.825 90.906 47.02 142.106 47.02s100.833-16.196 142.106-47.02c8.359-6.269 16.718-13.584 24.033-20.898 8.359-8.359 16.718-17.241 24.033-27.167 5.224-6.792 9.927-13.584 14.106-20.898 2.611-3.135 3.133-6.793 1.566-9.927z"/></svg>
                                </div>
                                <input v-model="form.apellido"
                                       id="apellido"
                                       type="text"
                                       class="w-full -ml-10 pl-10 pr-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                       required
                                       pattern="[a-zA-ZÁáÉéÍíÓóÚúÑ ñ]+"
                                       title="Solo letras"
                                >
                            </div>
                            <span class="md:w-52 text-red-500" v-if="form.errors.apellido" v-text="form.errors.apellido"></span>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row mt-3 md:mt-6">
                        <div class="flex flex-col">
                            <label class="text-base font-bold text-black">Teléfono <span class="text-gray-500 text-sm font-medium">(Sin 0 ni 15)</span></label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg class="fill-current text-pink-300 w-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384"><path d="M353.188 252.052c-23.51 0-46.594-3.677-68.469-10.906-10.719-3.656-23.896-.302-30.438 6.417l-43.177 32.594c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208 11.167-20.198 7.635-31.448-7.26-21.99-10.948-45.063-10.948-68.583C132.146 13.823 118.323 0 101.333 0h-70.52C13.823 0 0 13.823 0 30.813 0 225.563 158.438 384 353.188 384c16.99 0 30.813-13.823 30.813-30.813v-70.323c-.001-16.989-13.824-30.812-30.813-30.812z"/></svg>
                                </div>
                                <input v-model="form.telefono"
                                       id="telefono"
                                       type="text"
                                       class="w-full -ml-10 pl-10 pr-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                       required
                                       minlength="9"
                                       maxlength="10"
                                >
                            </div>
                            <span class="md:w-52 text-red-500" v-if="form.errors.telefono" v-text="form.errors.telefono"></span>
                        </div>
                        <div class="flex flex-col mt-3 md:mt-0 md:ml-6">
                            <label class="text-base font-bold text-black">Dirección</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg class="fill-current text-pink-300 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M255.998 0c-88.235 0-160 71.765-160 160 0 85.12 145.344 275.755 151.531 283.819 2.027 2.645 5.141 4.181 8.469 4.181s6.443-1.536 8.469-4.181C270.654 435.755 415.998 245.12 415.998 160c0-88.235-71.765-160-160-160zm0 234.667c-41.173 0-74.667-33.493-74.667-74.667s33.493-74.667 74.667-74.667 74.667 33.493 74.667 74.667-33.494 74.667-74.667 74.667z"/><path d="M499.539 495.424l-85.333-128a10.691 10.691 0 00-8.875-4.757h-57.707c-30.912 47.552-59.52 85.397-66.219 94.123-5.995 7.829-15.509 12.544-25.408 12.544-9.899 0-19.413-4.715-25.429-12.565-6.677-8.725-35.307-46.571-66.197-94.101h-57.707a10.691 10.691 0 00-8.875 4.757l-85.333 128a10.706 10.706 0 00-.533 10.965 10.7 10.7 0 009.408 5.611h469.333c3.947 0 7.552-2.176 9.387-5.632 1.878-3.478 1.686-7.681-.512-10.945z"/></svg>                                </div>
                                <input v-model="form.direccion"
                                       id="direccion"
                                       type="text"
                                       class="w-full -ml-10 pl-10 pr-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                       required
                                       pattern="[a-zA-Z0-9ÁáÉéÍíÓóÚúÑñ ]+"
                                       title="Solo letras y números"
                                >
                            </div>
                            <span class="md:w-52 text-red-500" v-if="form.errors.direccion" v-text="form.errors.direccion"></span>
                        </div>
                        <div class="flex flex-col mt-3 md:mt-0 md:ml-6">
                            <label class="text-base font-bold text-black">Email</label>
                            <div class="flex">
                                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <svg class="fill-current text-pink-300 w-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M339.392 258.624L512 367.744V144.896zM0 144.896v222.848l172.608-109.12zM480 80H32C16.032 80 3.36 91.904.96 107.232L256 275.264l255.04-168.032C508.64 91.904 495.968 80 480 80zM310.08 277.952l-45.28 29.824a15.983 15.983 0 01-8.8 2.624c-3.072 0-6.112-.864-8.8-2.624l-45.28-29.856L1.024 404.992C3.488 420.192 16.096 432 32 432h448c15.904 0 28.512-11.808 30.976-27.008L310.08 277.952z"/></svg>                                </div>
                                <input v-model="form.email"
                                       id="email"
                                       type="email"
                                       class="w-full -ml-10 pl-10 pr-3 py-2 bg-gray-50 border-2 border-gray-300 rounded-md text-gray-700 focus:border-pink-500 focus:outline-none focus:ring-0"
                                       required
                                >
                            </div>
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
