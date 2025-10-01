<?php
/**
 * Title: Footer Partial
 * Purpose: To provide a footer for all pages of the application
 */
?>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <footer class="flex absolute bottom-0 py-5 w-full justify-center bg-myFooter">



        <div class="text-center">
            <a href="?action=home" class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900">
                <img src="/Lib/Images/Logo_No_Background.png" class="h-12 mr-3 sm:h-9" alt="Landwind Logo">
                House To Home Solutions
            </a>

            <span class="block text-sm text-center text-gray-500"> &copy; <?php echo date("Y");?> House To Home LLC. All Rights Reserved.
                Built by 
                <a href="https://www.instagram.com/yasin.sisto/?hl=en" target="_blank" 
                    class="text-purple-600 hover:underline">Yasin Sisto</a> and 
                    <a
                    href="#"  target="_blank" class="text-purple-600 hover:underline">Ethan Diaz
                </a>.
            </span>

            <ul class="flex justify-center mt-5 space-x-5">
                <li>
                    <a href="tel:+6054004440" class="text-gray-500 hover:text-gray-900">

                        <svg class="w-5 h-5 " fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 5a2 2 0 012-2h1.586a1 1 0 01.707.293l2.828 2.828a1 1 0 010 1.414L8.414 9.586a16.021 16.021 0 006 6l2.051-2.051a1 1 0 011.414 0l2.828 2.828a1 1 0 01.293.707V19a2 2 0 01-2 2h-1c-9.389 0-17-7.611-17-17V5z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/people/House-to-Home-Solutions/61567396322695/" target="_blank"  class="text-gray-500 hover:text-gray-900">
                        <svg class="w-5 h-5 text-myPurple" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.988H7.898v-2.89h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.772-1.63 1.562v1.875h2.773l-.443 2.89h-2.33V21.878C18.343 21.128 22 16.991 22 12z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/h2h.solutions/#" target="_blank"  class="text-gray-500 hover:text-gray-900">
                        <svg class="w-5 h-5 text-myPurple" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M7.75 2C4.574 2 2 4.574 2 7.75v8.5C2 19.426 4.574 22 7.75 22h8.5C19.426 22 22 19.426 22 16.25v-8.5C22 4.574 19.426 2 16.25 2h-8.5zM12 7.25a4.75 4.75 0 110 9.5 4.75 4.75 0 010-9.5zM18.25 5.75a1 1 0 110 2 1 1 0 010-2zM12 9.25a2.75 2.75 0 100 5.5 2.75 2.75 0 000-5.5z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    </div>
</body>
</html>
