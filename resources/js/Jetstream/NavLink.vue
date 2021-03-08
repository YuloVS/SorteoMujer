<template>
    <inertia-link :href="href" :class="classes">
        <slot></slot>
    </inertia-link>
</template>

<script>
    export default {
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-white-400 text-sm font-bold leading-5 text-white-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
                            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-white-500 hover:text-white-700 hover:border-white-300 focus:outline-none focus:text-white-700 focus:border-white-300 transition duration-150 ease-in-out'
            }
        }
    }
</script>
