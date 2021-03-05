<template>
	<div>
		<jet-banner />
		<div class="min-h-screen bg-gray-50">
			<nav class="border-b border-gray-100 py-6" style="background: #fe0070">
				<div class="mx-auto px-14">
					<div class="flex justify-between">
						<div class="flex">
							<div class=" flex items-center">
								<div>
									<jet-application-mark class="block h-14" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>

			<!-- Page Content -->
			<main class="bg-red-100">
				<slot></slot>
			</main>

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
        switchToTeam(team) {
            this.$inertia.put(route('current-team.update'), {
                'team_id': team.id
            }, {
                preserveState: false
            })
        },

        logout() {
            this.$inertia.post(route('logout'));
        },
    }
}
</script>
