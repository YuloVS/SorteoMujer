<template>
    <FormularioLayout>
        <div class="flex justify-center mt-2 mb-auto">
            <div class="shadow-lg rounded mb-4 p-4">
                <img class="w-72 mx-auto " v-bind:src = "'/img/DíaDeLaMujer.svg'" alt="">
                <h1 class="text-4xl font-bold text-center mx-auto text-black mb-2">Comprobá si ganaste</h1>
                <!--<p class="text-gray-400 text-base font-medium text-center mx-auto mb-8">-</p>-->
                <form @submit.prevent="submit">
                    <div class="flex justify-center flex-col md:flex-row">
                        <div class="flex flex-col">
                            <label class="text-base font-bold text-black">DNI <span class="text-gray-500 text-sm font-medium">(Sin puntos)</span></label>
                            <div class="flex ">
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

                    </div>
                    <div class="flex justify-center mt-6">
                        <button @submit="this.form.dni" class="px-3 py-2 bg-pink-600 text-gray-50 text-base font-semibold uppercase rounded-lg hover:bg-pink-500 focus:outline-none focus:ring-0">
                            Verificar
                        </button>
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

    props: ['premio'],

    data() {
        return {
            form: this.$inertia.form ({
                dni: null,
            }),
            premio: null,
        }
    },

    methods: {
        submit(dni) {
            this.form.get('/control/' + dni, {
                preserveScroll: true,
                onSuccess: () => {
                    this.form.reset();
                }
            })
        },
    },
}
</script>
