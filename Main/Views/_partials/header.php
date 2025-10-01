<?php
/**
 * Title: Header Partial
 * Purpose: To provide a header for all pages of the application and include
 *          navigation links
 */
?>
<!DOCTYPE html>
<html lang="en-us" class=" ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>House To Home Solutions</title>
    <link href="/Lib/Images/Logo_Black.png" rel="icon" media="(prefers-color-scheme: light)">
    <link href="/Lib/Images/Logo_White.png" rel="icon" media="(prefers-color-scheme: dark)">
    <link rel="stylesheet" href="/src/output.css?v=2" />
    <link rel="stylesheet" href="/Lib/CSS/styles.css">
    
    
</head>
<body class="">
<div class="relative min-h-screen">

    <nav class="top-0 flex w-full py-5 bg-myNav caret-transparent  ">
        <div class="shrink  px-2 w-20">
            <a href="?action=home">
                <img src="/Lib/Images/Logo_Black.png" alt="Logo" class="inline shrink max-w-12 logo-purple">
            </a>
        </div>
    <div class="flex right-0 py-2 w-80  md:w-6/7 lg:w-6/7 justify-evenly  text-md  md:text-xl lg:text-xl font-bold ">
        <?php $currentAction = $_GET['action'] ?? 'home'; ?>
        <?php if($currentAction == 'home') : ?>
            <a href="?action=RequestEstimate" class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Request an Estimate</a>
            <a href="?action=RequestEstimate" class=" lg:hidden md:hidden inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Estimate</a> <p class="lg:hidden md:hidden">|</p>
        <?php else : ?>
            <a href="?action=home" class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Home Page</a>
            <a href="?action=home" class=" lg:hidden md:hidden inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">Home</a> <p class="lg:hidden md:hidden">|</p>
        <?php endif; ?>

        <a href="https://g.page/r/CWpYvnZqvDsDEBM/review" target="_blank"  class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto text-[#534B6F]">Write a review</a>
        <a href="https://g.page/r/CWpYvnZqvDsDEBM/review" target="_blank"  class="inline-block lg:hidden md:hidden transition-transform duration-300 hover:scale-110 m-auto text-[#534B6F]">Review</a> <p class="lg:hidden md:hidden">|</p>


        <button data-popover-target="popover-bottom" data-popover-placement="bottom" type="button" class="hidden lg:inline-block md:inline-block text-[#322d43]  me-4 bg-transparent transition-transform duration-300 hover:scale-110 focus:ring-4 focus:outline-none focus:ring-[#ffefe7] rounded-lg px-5 py-2.5 text-center ">Contact Us</button>

        <div data-popover id="popover-bottom" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-myDarkPurple border border-myDarkPurple rounded-lg shadow-xs opacity-0 ">
            <div class="px-3 py-2 bg-myDarkPurple border-b border-myDarkPurple rounded-t-lg ">
                <h3 class="font-semibold text-white ">Contact Info</h3>
            </div>
            <div class="px-3 py-2 font-light bg-[#534B6F] rounded-b-lg ">
                <!-- Phone -->
                <div class="flex items-center gap-2 p-1">

                    <span class="text-base">Call us: <a href="tel:+6054004440" class="text-myPurple underline">(605) 400-4440</a></span>
                </div>

                <!-- Facebook -->
                <div class="flex items-center gap-2 p-1">

                    <span class="text-base">Follow us on <a href="https://www.facebook.com/people/House-to-Home-Solutions/61567396322695/" target="_blank" class="text-myPurple underline">Facebook</a></span>
                </div>

                <!-- Instagram -->
                <div class="flex items-center gap-2 p-1">

                    <span class="text-base">Find us on <a href="https://www.instagram.com/h2h.solutions/#" target="_blank" class="text-myPurple underline">Instagram</a></span>
                </div>
            </div>
            <div data-popper-arrow></div>
        </div>

        <a href="?action=about" class="hidden lg:inline-block md:inline-block transition-transform duration-300 hover:scale-110 m-auto  text-[#534B6F]">About us</a>
        <a href="?action=about" class="inline-block lg:hidden md:hidden transition-transform duration-300 hover:scale-110 m-auto text-[#534B6F]">About</a>



    </div>
    </nav>

    

