<template>
    <div>
        <jet-banner />
        <div class="flex flex-col bg-gray-50 h-screen">
            <main class="mb-auto mt-auto">
                <slot></slot>
            </main>
            <Footer></Footer>
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
    }
</script>
