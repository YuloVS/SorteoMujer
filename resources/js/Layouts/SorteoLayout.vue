<template>
    <div>
        <jet-banner />
        <div class="min-h-screen bg-gray-50">
            <nav class="border-b border-gray-100 py-6" style="background: #fe0070">
                <div class="mx-auto px-12">
                    <div class="flex justify-between">
                        <div class="flex">
                            <div class=" flex items-center">
                                <inertia-link :href="route('sorteo')">
                                    <jet-application-mark class="block h-14" />
                                </inertia-link>
                            </div>
                            <div class="hidden text-white space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                                <jet-nav-link :href="route('sorteo')" :active="route().current('sorteo')">
                                    Sortear
                                </jet-nav-link>
                            </div>
                            <div class="hidden text-white space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <jet-nav-link :href="route('ganadores')" :active="route().current('ganadores')">
                                    Ganadores
                                </jet-nav-link>
                            </div>
                    </div>

                    <div class="hidden sm:flex sm:items-center sm:ml-6">

                        <!-- Settings Dropdown -->
                        <div class="ml-3 relative">
                            <jet-dropdown align="right" width="48">
                                <template #trigger>

                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-base leading-4 font-semibold rounded-md text-gray-50 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150" style="background: #fe0070">
                                                {{ $page.props.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                </template>

                                <template #content>

                                    <form @submit.prevent="logout">
                                        <jet-dropdown-link as="button">
                                            Salir
                                        </jet-dropdown-link>
                                    </form>
                                </template>
                            </jet-dropdown>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-50 hover:text-pink-300 focus:outline-none focus:bg-gray-100 focus:text-gray-50 transition duration-150 ease-in-out" style="background: #fe0070">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
            <div class="pt-2 pb-1 text-white ">

                <div class="mt-3 space-y-1">

                    <form method="POST" @submit.prevent="logout">
                        <jet-responsive-nav-link as="button">
                            Salir
                        </jet-responsive-nav-link>
                    </form>

                </div>
            </div>
        </div>
        </nav>

        <div class="flex flex-col bg-gray-50 h-screen">
            <main class="mb-auto mt-auto">
                <slot></slot>
            </main>
            <Footer></Footer>
        </div>
    </div>
    </div>
</template>

<script>
import JetApplicationMark from '@/Jetstream/ApplicationMark'
import JetBanner from '@/Jetstream/Banner'
import JetDropdown from '@/Jetstream/Dropdown'
import JetDropdownLink from '@/Jetstream/DropdownLink'
import JetNavLink from '@/Jetstream/NavLink'
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'
import Footer from "@/Layouts/Footer";

export default {
    components: {
        Footer,
        JetApplicationMark,
        JetBanner,
        JetDropdown,
        JetDropdownLink,
        JetNavLink,
        JetResponsiveNavLink,
    },

    data() {
        return {
            showingNavigationDropdown: false,
        }
    },

    methods: {
        logout() {
            this.$inertia.post(route('logout'));
        },
    }
}
</script>
