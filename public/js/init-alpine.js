// import globalData from "./globalData.js";

Alpine.start();

document.addEventListener('alpine:init', () => {
    Alpine.data('data', () => ({
        isProfileMenuOpen: false,
        workToggle:false,
        toggleworkToggle() {
            this.workToggle = !this.workToggle
        },
        toggleProfileMenu() {
            this.isProfileMenuOpen = !this.isProfileMenuOpen
        },

        closeProfileMenu() {
            this.isProfileMenuOpen = false
        },

        isSideMenuOpen: false,
        toggleSideMenu() {
            this.isSideMenuOpen = !this.isSideMenuOpen
        },

        closeSideMenu() {
            this.isSideMenuOpen = false
        },

        isMultiLevelMenuOpen: false,
        toggleMultiLevelMenu() {
            this.isMultiLevelMenuOpen = !this.isMultiLevelMenuOpen
        }
    }))

    // Alpine.data('globalData', globalData);
})
