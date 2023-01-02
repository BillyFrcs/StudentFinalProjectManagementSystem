<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login | Admin</title>

  <link rel="stylesheet" href="../../css/app.css">
  <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
<div class="relative min-h-screen flex ">
    <div class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 bg-white">
      <div class="sm:w-1/2 xl:w-3/5 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden bg-purple-900 text-white bg-no-repeat bg-cover relative"
        style="background-image: url(https://images.unsplash.com/photo-1579451861283-a2239070aaa9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
        <div class="absolute bg-gradient-to-b from-indigo-600 to-blue-500 opacity-75 inset-0 z-0"></div>
        <div class="w-full  max-w-md z-10">
          <div class="sm:text-4xl xl:text-5xl font-bold leading-tight mb-6">Student Final Project Management System</div>
          <div class="sm:text-sm xl:text-md text-gray-200 font-normal"> What is Lorem Ipsum Lorem Ipsum is simply dummy
            text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it
            has?</div>
        </div>
       <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
   </ul>
    </div>
    
      <div class="md:flex md:items-center md:justify-center w-full sm:w-auto md:h-full xl:w-2/5 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none bg-white">
        <div class="max-w-md w-full space-y-8">
          <div class="text-center">
            <h2 class="mt-6 text-3xl font-bold text-gray-900">
              Hello Admin!
            </h2>
            <p class="mt-2 text-sm text-gray-500">Please sign in to administrator account</p>
          </div>

          <div class="flex items-center justify-center space-x-2">
            <span class="h-px w-16 bg-gray-200"></span>
            <span class="text-gray-300 font-normal">Billy Franscois</span>
            <span class="h-px w-16 bg-gray-200"></span>
          </div>
          
          <form class="mt-8 space-y-6" action="" method="post" enctype="multipart/form-data">
            <?php 
            if (session()->getFlashData('error'))
            { ?>
<div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div>
    <!-- <span class="font-medium">Danger alert!</span>  -->
    <?php echo session()->getFlashData('error'); ?>
  </div>
</div>
            <?php
            }
            ?>

            <!-- <input type="hidden" id="remember" name="remember" value="true"> -->

            <div class="relative">
              <div class="absolute right-3 mt-4"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500"
                  fill="none" viewBox="0 0 24 24" stroke="currentColor">

                  <!-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path> -->

                </svg>
              </div>

              <label for="email" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Email</label>
              <input
                class="w-full text-base px-4 py-2 border-b border-gray-300 focus:outline-none rounded-2xl focus:border-indigo-500"
                type="email" placeholder="Enter admin email" id="email" name="email" value="<?php echo session()->getFlashData('email'); ?>">
            </div>

            <div class="mt-8 content-center">
              <label for="password" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">
                Password
              </label>
              <input
                class="w-full content-center text-base px-4 py-2 border-b rounded-2xl border-gray-300 focus:outline-none focus:border-indigo-500"
                type="password" placeholder="Enter admin password" id="password" name="password" value="">
            </div>

            <!-- <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input id="rememberMe" name="rememberMe" type="checkbox"
                  class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded">
                <label for="rememberMe" class="ml-2 block text-sm text-gray-900">
                  Remember me
                </label>
              </div>

              <div class="text-sm">
                <a href="" class="text-indigo-400 hover:text-blue-500">
                  Forgot your password?
                </a>
              </div>

            </div> -->

            <div>
              <!-- <button type="submit" id="login" name="login"
                class="w-full flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">
                Sign in
              </button> -->

              <input type="submit" id="login" name="login" value="Sign in" class="w-full flex justify-center bg-gradient-to-r from-indigo-500 to-blue-600 hover:bg-gradient-to-l hover:from-blue-500 hover:to-indigo-600 text-gray-100 p-4 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-500">
            </div>
            
            <!-- <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
              <span>Don't have an account?</span>
              <a href="#"
                class="text-indigo-400 hover:text-blue-500 no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign
                up</a>
            </p> -->

          </form>

        </div>
      </div>
    </div>
  </div>
</body>
</html>