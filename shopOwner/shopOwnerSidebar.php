<div :class="{'dark text-white-dark' : $store.app.semidark}">
    <nav x-data="sidebar" class="sidebar fixed min-h-screen h-full top-0 bottom-0 w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] z-50 transition-all duration-300">
        <div class="bg-white dark:bg-[#0e1726] h-full">
            <div class="flex justify-between items-center px-4 py-3">
                <a href="/studentDashboard.php" class="main-logo flex items-center shrink-0">
                    <img class="w-20 ml-[5px] flex-none" src="/assets/images/kvpjb.jpg" alt="image" />
                    <span class="text-2xl ltr:ml-1.5 rtl:mr-1.5  font-semibold  align-middle lg:inline dark:text-white-light">HairHubz</span>
                </a>
                <a href="javascript:;" class="collapse-icon w-8 h-8 rounded-full flex items-center hover:bg-gray-500/10 dark:hover:bg-dark-light/10 dark:text-white-light transition duration-300 rtl:rotate-180" @click="$store.app.toggleSidebar()">
                    <svg class="w-5 h-5 m-auto" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
             <ul class="perfect-scrollbar relative font-semibold space-y-0.5 h-[calc(100vh-80px)] overflow-y-auto overflow-x-hidden  p-4 py-0" x-data="{ activeDropdown: null }">
                <li class="menu nav-item">

                <li class="nav-item">
                    <ul>
                        <li class="nav-item">
                            <a href="shopOwnerDashboard.php" class="group">
                                <div class="flex items-center">

                                <svg class="group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z" fill="currentColor" />
                                <path d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z" fill="currentColor" />
                            </svg>
                                    <span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
                                </div>
                            </a>
                        </li>

                        <!-- Manage Shop -->
                        <li class="menu nav-item">
                        <button type="button" class="nav-link group" :class="{'active' : activeDropdown === 'manageShop'}" @click="activeDropdown === 'manageShop' ? activeDropdown = null : activeDropdown = 'manageShop'">
                                <div class="flex items-center">

                                <svg class="group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M12 16.0678L8.22855 19.9727C7.68843 20.532 7.41837 20.8116 7.18967 20.9084C6.66852 21.1289 6.09042 20.9402 5.81628 20.4601C5.69597 20.2494 5.65848 19.8694 5.5835 19.1094C5.54117 18.6803 5.52 18.4657 5.45575 18.286C5.31191 17.8837 5.00966 17.5708 4.6211 17.4218C4.44755 17.3553 4.24033 17.3334 3.82592 17.2895L3.82589 17.2895C3.09187 17.2119 2.72486 17.1731 2.52138 17.0485C2.05772 16.7647 1.87548 16.1661 2.08843 15.6265C2.18188 15.3897 2.45194 15.1101 2.99206 14.5509L5.45575 11.9999L6.69396 10.7617L12 16.0678L17.306 10.7617L18.5442 11.9999L21.0079 14.5509C21.5481 15.1101 21.8181 15.3897 21.9116 15.6265C22.1245 16.1661 21.9423 16.7647 21.4786 17.0485C21.2751 17.1731 20.9081 17.2119 20.1741 17.2895C19.7597 17.3334 19.5525 17.3553 19.3789 17.4218C18.9903 17.5708 18.6881 17.8837 18.5442 18.286C18.48 18.4657 18.4588 18.6803 18.4165 19.1094V19.1094C18.3415 19.8694 18.304 20.2494 18.1837 20.4601C17.9096 20.9402 17.3315 21.1289 16.8103 20.9084C16.5816 20.8116 16.3116 20.532 15.7715 19.9727L12 16.0678Z" fill="currentColor"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 16C15.866 16 19 12.866 19 9C19 5.13401 15.866 2 12 2C8.13401 2 5 5.13401 5 9C5 12.866 8.13401 16 12 16ZM12 6C11.7159 6 11.5259 6.34084 11.1459 7.02251L11.0476 7.19887C10.9397 7.39258 10.8857 7.48944 10.8015 7.55334C10.7173 7.61725 10.6125 7.64097 10.4028 7.68841L10.2119 7.73161C9.47396 7.89857 9.10501 7.98205 9.01723 8.26432C8.92945 8.54659 9.18097 8.84072 9.68403 9.42898L9.81418 9.58117C9.95713 9.74833 10.0286 9.83191 10.0608 9.93531C10.0929 10.0387 10.0821 10.1502 10.0605 10.3733L10.0408 10.5763C9.96476 11.3612 9.92674 11.7536 10.1565 11.9281C10.3864 12.1025 10.7318 11.9435 11.4227 11.6254L11.6014 11.5431C11.7978 11.4527 11.8959 11.4075 12 11.4075C12.1041 11.4075 12.2022 11.4527 12.3986 11.5431L12.5773 11.6254C13.2682 11.9435 13.6136 12.1025 13.8435 11.9281C14.0733 11.7536 14.0352 11.3612 13.9592 10.5763L13.9395 10.3733C13.9179 10.1502 13.9071 10.0387 13.9392 9.93531C13.9714 9.83191 14.0429 9.74833 14.1858 9.58118L14.316 9.42898C14.819 8.84072 15.0706 8.54659 14.9828 8.26432C14.895 7.98205 14.526 7.89857 13.7881 7.73161L13.5972 7.68841C13.3875 7.64097 13.2827 7.61725 13.1985 7.55334C13.1143 7.48944 13.0603 7.39258 12.9524 7.19887L12.8541 7.02251C12.4741 6.34084 12.2841 6 12 6Z" fill="currentColor"/>
                                </svg>
                                    <span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Manage Shop</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'manageShop'}">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <ul x-cloak x-show="activeDropdown === 'manageShop'" x-collapse class="sub-menu text-gray-500">
                                <li>
                                    <a href="addVendor.php">Register Shop</a>
                                </li>
                                <li>
                                    <a href="viewAllShop.php">View All Shop</a>
                                </li>

                              
                            </ul>
                        </li>

                        <!-- Manage Staff -->
                        <li class="menu nav-item">
                        <button type="button" class="nav-link group" :class="{'active' : activeDropdown === 'manageStaff'}" @click="activeDropdown === 'manageStaff' ? activeDropdown = null : activeDropdown = 'manageStaff'">
                                <div class="flex items-center">

                                <svg class="group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M12 16.0678L8.22855 19.9727C7.68843 20.532 7.41837 20.8116 7.18967 20.9084C6.66852 21.1289 6.09042 20.9402 5.81628 20.4601C5.69597 20.2494 5.65848 19.8694 5.5835 19.1094C5.54117 18.6803 5.52 18.4657 5.45575 18.286C5.31191 17.8837 5.00966 17.5708 4.6211 17.4218C4.44755 17.3553 4.24033 17.3334 3.82592 17.2895L3.82589 17.2895C3.09187 17.2119 2.72486 17.1731 2.52138 17.0485C2.05772 16.7647 1.87548 16.1661 2.08843 15.6265C2.18188 15.3897 2.45194 15.1101 2.99206 14.5509L5.45575 11.9999L6.69396 10.7617L12 16.0678L17.306 10.7617L18.5442 11.9999L21.0079 14.5509C21.5481 15.1101 21.8181 15.3897 21.9116 15.6265C22.1245 16.1661 21.9423 16.7647 21.4786 17.0485C21.2751 17.1731 20.9081 17.2119 20.1741 17.2895C19.7597 17.3334 19.5525 17.3553 19.3789 17.4218C18.9903 17.5708 18.6881 17.8837 18.5442 18.286C18.48 18.4657 18.4588 18.6803 18.4165 19.1094V19.1094C18.3415 19.8694 18.304 20.2494 18.1837 20.4601C17.9096 20.9402 17.3315 21.1289 16.8103 20.9084C16.5816 20.8116 16.3116 20.532 15.7715 19.9727L12 16.0678Z" fill="currentColor"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 16C15.866 16 19 12.866 19 9C19 5.13401 15.866 2 12 2C8.13401 2 5 5.13401 5 9C5 12.866 8.13401 16 12 16ZM12 6C11.7159 6 11.5259 6.34084 11.1459 7.02251L11.0476 7.19887C10.9397 7.39258 10.8857 7.48944 10.8015 7.55334C10.7173 7.61725 10.6125 7.64097 10.4028 7.68841L10.2119 7.73161C9.47396 7.89857 9.10501 7.98205 9.01723 8.26432C8.92945 8.54659 9.18097 8.84072 9.68403 9.42898L9.81418 9.58117C9.95713 9.74833 10.0286 9.83191 10.0608 9.93531C10.0929 10.0387 10.0821 10.1502 10.0605 10.3733L10.0408 10.5763C9.96476 11.3612 9.92674 11.7536 10.1565 11.9281C10.3864 12.1025 10.7318 11.9435 11.4227 11.6254L11.6014 11.5431C11.7978 11.4527 11.8959 11.4075 12 11.4075C12.1041 11.4075 12.2022 11.4527 12.3986 11.5431L12.5773 11.6254C13.2682 11.9435 13.6136 12.1025 13.8435 11.9281C14.0733 11.7536 14.0352 11.3612 13.9592 10.5763L13.9395 10.3733C13.9179 10.1502 13.9071 10.0387 13.9392 9.93531C13.9714 9.83191 14.0429 9.74833 14.1858 9.58118L14.316 9.42898C14.819 8.84072 15.0706 8.54659 14.9828 8.26432C14.895 7.98205 14.526 7.89857 13.7881 7.73161L13.5972 7.68841C13.3875 7.64097 13.2827 7.61725 13.1985 7.55334C13.1143 7.48944 13.0603 7.39258 12.9524 7.19887L12.8541 7.02251C12.4741 6.34084 12.2841 6 12 6Z" fill="currentColor"/>
                                </svg>
                                    <span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Manage Staff</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'registerShop'}">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <ul x-cloak x-show="activeDropdown === 'manageStaff'" x-collapse class="sub-menu text-gray-500">
                                <li>
                                    <a href="addStaff.php">Add Staff</a>
                                </li>
                                <li>
                                    <a href="viewStaff.php">View All Staff</a>
                                </li>
                                <li>
                                    <a href="addStaff.php">Staff Schedule</a>
                                </li>
                                <li>
                                    <a href="addStaff.php">Staff Leave Approval</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Booking Monitoring -->
                        <li class="menu nav-item">
                        <button type="button" class="nav-link group" :class="{'active' : activeDropdown === 'bookingMonitoring'}" @click="activeDropdown === 'bookingMonitoring' ? activeDropdown = null : activeDropdown = 'bookingMonitoring'">
                                <div class="flex items-center">

                                <svg class="group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M12 16.0678L8.22855 19.9727C7.68843 20.532 7.41837 20.8116 7.18967 20.9084C6.66852 21.1289 6.09042 20.9402 5.81628 20.4601C5.69597 20.2494 5.65848 19.8694 5.5835 19.1094C5.54117 18.6803 5.52 18.4657 5.45575 18.286C5.31191 17.8837 5.00966 17.5708 4.6211 17.4218C4.44755 17.3553 4.24033 17.3334 3.82592 17.2895L3.82589 17.2895C3.09187 17.2119 2.72486 17.1731 2.52138 17.0485C2.05772 16.7647 1.87548 16.1661 2.08843 15.6265C2.18188 15.3897 2.45194 15.1101 2.99206 14.5509L5.45575 11.9999L6.69396 10.7617L12 16.0678L17.306 10.7617L18.5442 11.9999L21.0079 14.5509C21.5481 15.1101 21.8181 15.3897 21.9116 15.6265C22.1245 16.1661 21.9423 16.7647 21.4786 17.0485C21.2751 17.1731 20.9081 17.2119 20.1741 17.2895C19.7597 17.3334 19.5525 17.3553 19.3789 17.4218C18.9903 17.5708 18.6881 17.8837 18.5442 18.286C18.48 18.4657 18.4588 18.6803 18.4165 19.1094V19.1094C18.3415 19.8694 18.304 20.2494 18.1837 20.4601C17.9096 20.9402 17.3315 21.1289 16.8103 20.9084C16.5816 20.8116 16.3116 20.532 15.7715 19.9727L12 16.0678Z" fill="currentColor"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 16C15.866 16 19 12.866 19 9C19 5.13401 15.866 2 12 2C8.13401 2 5 5.13401 5 9C5 12.866 8.13401 16 12 16ZM12 6C11.7159 6 11.5259 6.34084 11.1459 7.02251L11.0476 7.19887C10.9397 7.39258 10.8857 7.48944 10.8015 7.55334C10.7173 7.61725 10.6125 7.64097 10.4028 7.68841L10.2119 7.73161C9.47396 7.89857 9.10501 7.98205 9.01723 8.26432C8.92945 8.54659 9.18097 8.84072 9.68403 9.42898L9.81418 9.58117C9.95713 9.74833 10.0286 9.83191 10.0608 9.93531C10.0929 10.0387 10.0821 10.1502 10.0605 10.3733L10.0408 10.5763C9.96476 11.3612 9.92674 11.7536 10.1565 11.9281C10.3864 12.1025 10.7318 11.9435 11.4227 11.6254L11.6014 11.5431C11.7978 11.4527 11.8959 11.4075 12 11.4075C12.1041 11.4075 12.2022 11.4527 12.3986 11.5431L12.5773 11.6254C13.2682 11.9435 13.6136 12.1025 13.8435 11.9281C14.0733 11.7536 14.0352 11.3612 13.9592 10.5763L13.9395 10.3733C13.9179 10.1502 13.9071 10.0387 13.9392 9.93531C13.9714 9.83191 14.0429 9.74833 14.1858 9.58118L14.316 9.42898C14.819 8.84072 15.0706 8.54659 14.9828 8.26432C14.895 7.98205 14.526 7.89857 13.7881 7.73161L13.5972 7.68841C13.3875 7.64097 13.2827 7.61725 13.1985 7.55334C13.1143 7.48944 13.0603 7.39258 12.9524 7.19887L12.8541 7.02251C12.4741 6.34084 12.2841 6 12 6Z" fill="currentColor"/>
                                </svg>
                                    <span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Booking Monitoring</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'bookingMonitoring'}">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <ul x-cloak x-show="activeDropdown === 'bookingMonitoring'" x-collapse class="sub-menu text-gray-500">
                                <li>
                                    <a href="addVendor.php">View all booking</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Sales Report -->
                        <li class="menu nav-item">
                        <button type="button" class="nav-link group" :class="{'active' : activeDropdown === 'salesReport'}" @click="activeDropdown === 'salesReport' ? activeDropdown = null : activeDropdown = 'salesReport'">
                                <div class="flex items-center">

                                <svg class="group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M12 16.0678L8.22855 19.9727C7.68843 20.532 7.41837 20.8116 7.18967 20.9084C6.66852 21.1289 6.09042 20.9402 5.81628 20.4601C5.69597 20.2494 5.65848 19.8694 5.5835 19.1094C5.54117 18.6803 5.52 18.4657 5.45575 18.286C5.31191 17.8837 5.00966 17.5708 4.6211 17.4218C4.44755 17.3553 4.24033 17.3334 3.82592 17.2895L3.82589 17.2895C3.09187 17.2119 2.72486 17.1731 2.52138 17.0485C2.05772 16.7647 1.87548 16.1661 2.08843 15.6265C2.18188 15.3897 2.45194 15.1101 2.99206 14.5509L5.45575 11.9999L6.69396 10.7617L12 16.0678L17.306 10.7617L18.5442 11.9999L21.0079 14.5509C21.5481 15.1101 21.8181 15.3897 21.9116 15.6265C22.1245 16.1661 21.9423 16.7647 21.4786 17.0485C21.2751 17.1731 20.9081 17.2119 20.1741 17.2895C19.7597 17.3334 19.5525 17.3553 19.3789 17.4218C18.9903 17.5708 18.6881 17.8837 18.5442 18.286C18.48 18.4657 18.4588 18.6803 18.4165 19.1094V19.1094C18.3415 19.8694 18.304 20.2494 18.1837 20.4601C17.9096 20.9402 17.3315 21.1289 16.8103 20.9084C16.5816 20.8116 16.3116 20.532 15.7715 19.9727L12 16.0678Z" fill="currentColor"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 16C15.866 16 19 12.866 19 9C19 5.13401 15.866 2 12 2C8.13401 2 5 5.13401 5 9C5 12.866 8.13401 16 12 16ZM12 6C11.7159 6 11.5259 6.34084 11.1459 7.02251L11.0476 7.19887C10.9397 7.39258 10.8857 7.48944 10.8015 7.55334C10.7173 7.61725 10.6125 7.64097 10.4028 7.68841L10.2119 7.73161C9.47396 7.89857 9.10501 7.98205 9.01723 8.26432C8.92945 8.54659 9.18097 8.84072 9.68403 9.42898L9.81418 9.58117C9.95713 9.74833 10.0286 9.83191 10.0608 9.93531C10.0929 10.0387 10.0821 10.1502 10.0605 10.3733L10.0408 10.5763C9.96476 11.3612 9.92674 11.7536 10.1565 11.9281C10.3864 12.1025 10.7318 11.9435 11.4227 11.6254L11.6014 11.5431C11.7978 11.4527 11.8959 11.4075 12 11.4075C12.1041 11.4075 12.2022 11.4527 12.3986 11.5431L12.5773 11.6254C13.2682 11.9435 13.6136 12.1025 13.8435 11.9281C14.0733 11.7536 14.0352 11.3612 13.9592 10.5763L13.9395 10.3733C13.9179 10.1502 13.9071 10.0387 13.9392 9.93531C13.9714 9.83191 14.0429 9.74833 14.1858 9.58118L14.316 9.42898C14.819 8.84072 15.0706 8.54659 14.9828 8.26432C14.895 7.98205 14.526 7.89857 13.7881 7.73161L13.5972 7.68841C13.3875 7.64097 13.2827 7.61725 13.1985 7.55334C13.1143 7.48944 13.0603 7.39258 12.9524 7.19887L12.8541 7.02251C12.4741 6.34084 12.2841 6 12 6Z" fill="currentColor"/>
                                </svg>
                                    <span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Sales Report</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'salesReport'}">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <ul x-cloak x-show="activeDropdown === 'salesReport'" x-collapse class="sub-menu text-gray-500">
                                <li>
                                    <a href="addVendor.php">Total Earning</a>
                                </li>
                                <li>
                                    <a href="addStaff.php">Total Booking</a>
                                </li>
                              
                            </ul>
                        </li>
                        <!-- <li class="menu nav-item">
                            <button type="button" class="nav-link group" :class="{'active' : activeDropdown === 'student'}" @click="activeDropdown === 'student' ? activeDropdown = null : activeDropdown = 'student'">
                                <div class="flex items-center">

                                <svg class="group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5" d="M9.052 4.5C9 5.07763 9 5.80355 9 6.72183V17.2781C9 18.1964 9 18.9224 9.05201 19.5H8C5.64298 19.5 4.46447 19.5 3.73223 18.7678C3 18.0355 3 16.857 3 14.5V9.5C3 7.14298 3 5.96447 3.73223 5.23223C4.46447 4.5 5.64298 4.5 8 4.5H9.052Z" fill="currentColor"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.70725 2.4087C9 3.03569 9 4.18259 9 6.4764V17.5236C9 19.8174 9 20.9643 9.70725 21.5913C10.4145 22.2183 11.4955 22.0297 13.6576 21.6526L15.9864 21.2465C18.3809 20.8288 19.5781 20.62 20.2891 19.7417C21 18.8635 21 17.5933 21 15.0529V8.94711C21 6.40671 21 5.13652 20.2891 4.25826C19.5781 3.37999 18.3809 3.17118 15.9864 2.75354L13.6576 2.34736C11.4955 1.97026 10.4145 1.78171 9.70725 2.4087ZM12.75 10.9535C12.75 10.52 12.4142 10.1686 12 10.1686C11.5858 10.1686 11.25 10.52 11.25 10.9535V13.0465C11.25 13.48 11.5858 13.8314 12 13.8314C12.4142 13.8314 12.75 13.48 12.75 13.0465V10.9535Z" fill="currentColor"/>
                               

                                </svg>
                                    <span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Leave</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'student'}">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <ul x-cloak x-show="activeDropdown === 'student'" x-collapse class="sub-menu text-gray-500">
                                <li>
                                    <a href="leave.php">Apply Leave</a>
                                    <a href="leave-history.php">Leave History</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu nav-item">
                            <button type="button" class="nav-link group" :class="{'active' : activeDropdown === 'invoice'}" @click="activeDropdown === 'invoice' ? activeDropdown = null : activeDropdown = 'invoice'">
                                <div class="flex items-center">

                                    <svg class="group-hover:!text-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5Z" fill="currentColor" />
                                    </svg>
                                    <span class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Hostel Fee</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'invoice'}">

                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <ul x-cloak x-show="activeDropdown === 'invoice'" x-collapse class="sub-menu text-gray-500">
                                <li>
                                    <a href="#">Outstanding Fee</a>
                                </li>
                            </ul>
                        </li> -->
                     
            </ul>
        </div>
    </nav>
</div>
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("sidebar", () => ({
            init() {
                const selector = document.querySelector('.sidebar ul a[href="' + window.location.pathname + '"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.click();
                            });
                        }
                    }
                }
            },
        }));
    });
</script>
