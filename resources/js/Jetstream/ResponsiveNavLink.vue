<template>
    <div>
        <button :class="classes" class="w-full text-white text-left hover:bg-pink-300" v-if="as == 'button'">
            <slot></slot>
        </button>

        <inertia-link :href="href" :class="classes" v-else>
            <slot></slot>
        </inertia-link>
    </div>
</template>

<script>
    export default {
        props: ['active', 'href', 'as'],

        computed: {
            classes() {
                return this.active
                            ? 'block pl-3 pr-4 py-2 border-l-4 border-gray-400 text-base font-semibold text-pink-700 bg-pink-300 focus:outline-none focus:text-pink-800 focus:bg-pink-100 focus:border-pink-700 transition duration-150 ease-in-out'
                            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-semibold text-gray-50 hover:text-gray-800 hover:bg-pink-300 hover:border-pink-300 focus:outline-none focus:text-pink-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out'
            }
        }
    }
</script>
