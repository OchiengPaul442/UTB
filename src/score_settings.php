<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once './partials/head.php'; ?>

    <title>Score settings</title>
</head>

<body >
    <section class="main_con">
        <!-- nav bar -->
        <?php include_once './partials/navbar.php'; ?>

 <!-- main -->
 <main class="p-10 space-y-10">

<!-- page title -->
<h2
  class="text-5xl font-spartan text-center underline tracking-tight font-extrabold text-blue-800 sm:text-5xl md:text-6xl">
  Score Settings
</h2>


<!-- Lodges section -->
<div class="bg-blue-500/20 rounded-md p-6 mt-4 space-y-8">


  <h2 class="text-3xl font-spartan text-center underline tracking-tight font-extrabold text-blue-800 ">
    A) LODGES
  </h2>

  <!-- Star 1 -->
  <div class="space-y-5">
    <!-- icon -->
    <div class="text-blue-800 inline-flex items-center space-x-2">

      <!-- star svg -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current" enable-background="new 0 0 24 24"
        height="24px" viewBox="0 0 24 24" width="24px" fill="none">
        <rect fill="none" height="24" width="24" />
        <path
          d="M8.58,10H1l6.17,4.41L4.83,22L11,17.31L17.18,22l-2.35-7.59L21,10h-7.58L11,2L8.58,10z M21.36,22l-1.86-6.01L23.68,13h-3.44 l-3.08,2.2l1.46,4.72L21.36,22z M17,8l-1.82-6l-1.04,3.45L14.91,8H17z" />
      </svg>

      <h2 class="text-4xl font-spartan text-left tracking-tight font-bold  ">
        Star 1
      </h2>

    </div>

    <!-- Star Card -->
    <article
      class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-amber-400 bg-blue-800">
      <!-- grid -->
      <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center transition-colors border-amber-400 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-white hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            20
          </h2>

          <h3 class="font-bold">Minimum Score</h3>
        </div>

        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center hover:border-white hover:text-white transition-colors border-amber-400 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            70
          </h2>

          <h3 class="font-bold">Maximum Score</h3>
        </div>

        <!--Total  -->
        <div
          class="p-4 text-center items-center border-amber-400 border-r-0 md:border-r-2 lg:border-r-2 hover:border-white hover:text-white transition-colors">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            90
          </h2>

          <h3 class="font-bold">Total</h3>
        </div>

        <!-- Percentage -->

        <div class="p-4 text-center items-center transition-colors hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            100 %
          </h2>

          <h3 class="font-bold">Percentage</h3>
        </div>
      </div>
    </article>


  </div>

  <!-- Star 2 -->
  <div class="space-y-5">

    <!-- icon -->
    <div class="text-blue-800 inline-flex items-center space-x-2">

      <!-- star svg -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current" enable-background="new 0 0 24 24"
        height="24px" viewBox="0 0 24 24" width="24px" fill="none">
        <rect fill="none" height="24" width="24" />
        <path
          d="M8.58,10H1l6.17,4.41L4.83,22L11,17.31L17.18,22l-2.35-7.59L21,10h-7.58L11,2L8.58,10z M21.36,22l-1.86-6.01L23.68,13h-3.44 l-3.08,2.2l1.46,4.72L21.36,22z M17,8l-1.82-6l-1.04,3.45L14.91,8H17z" />
      </svg>

      <h2 class="text-4xl font-spartan text-left tracking-tight font-bold  ">
        Star 2
      </h2>

    </div>


    <!-- Star Card -->
    <article
      class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-amber-400 bg-blue-800">
      <!-- grid -->
      <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center transition-colors border-amber-400 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-white hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            20
          </h2>

          <h3 class="font-bold">Minimum Score</h3>
        </div>

        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center hover:border-white hover:text-white transition-colors border-amber-400 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            70
          </h2>

          <h3 class="font-bold">Maximum Score</h3>
        </div>

        <!--Total  -->
        <div
          class="p-4 text-center items-center border-amber-400 border-r-0 md:border-r-2 lg:border-r-2 hover:border-white hover:text-white transition-colors">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            90
          </h2>

          <h3 class="font-bold">Total</h3>
        </div>

        <!-- Percentage -->

        <div class="p-4 text-center items-center transition-colors hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            100 %
          </h2>

          <h3 class="font-bold">Percentage</h3>
        </div>
      </div>
    </article>


  </div>

  <!-- Star 3 -->
  <div class="space-y-5">
    <!-- icon -->
    <div class="text-blue-800 inline-flex items-center space-x-2">

      <!-- star svg -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current" enable-background="new 0 0 24 24"
        height="24px" viewBox="0 0 24 24" width="24px" fill="none">
        <rect fill="none" height="24" width="24" />
        <path
          d="M8.58,10H1l6.17,4.41L4.83,22L11,17.31L17.18,22l-2.35-7.59L21,10h-7.58L11,2L8.58,10z M21.36,22l-1.86-6.01L23.68,13h-3.44 l-3.08,2.2l1.46,4.72L21.36,22z M17,8l-1.82-6l-1.04,3.45L14.91,8H17z" />
      </svg>

      <h2 class="text-4xl font-spartan text-left tracking-tight font-bold  ">
        Star 3
      </h2>

    </div>

    <!-- Star Card -->
    <article
      class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-amber-400 bg-blue-800">
      <!-- grid -->
      <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center transition-colors border-amber-400 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-white hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            20
          </h2>

          <h3 class="font-bold">Minimum Score</h3>
        </div>

        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center hover:border-white hover:text-white transition-colors border-amber-400 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            70
          </h2>

          <h3 class="font-bold">Maximum Score</h3>
        </div>

        <!--Total  -->
        <div
          class="p-4 text-center items-center border-amber-400 border-r-0 md:border-r-2 lg:border-r-2 hover:border-white hover:text-white transition-colors">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            90
          </h2>

          <h3 class="font-bold">Total</h3>
        </div>

        <!-- Percentage -->

        <div class="p-4 text-center items-center transition-colors hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            100 %
          </h2>

          <h3 class="font-bold">Percentage</h3>
        </div>
      </div>
    </article>


  </div>

  <!-- Star 4 -->
  <div class="space-y-5">
    <!-- icon -->
    <div class="text-blue-800 inline-flex items-center space-x-2">

      <!-- star svg -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current" enable-background="new 0 0 24 24"
        height="24px" viewBox="0 0 24 24" width="24px" fill="none">
        <rect fill="none" height="24" width="24" />
        <path
          d="M8.58,10H1l6.17,4.41L4.83,22L11,17.31L17.18,22l-2.35-7.59L21,10h-7.58L11,2L8.58,10z M21.36,22l-1.86-6.01L23.68,13h-3.44 l-3.08,2.2l1.46,4.72L21.36,22z M17,8l-1.82-6l-1.04,3.45L14.91,8H17z" />
      </svg>

      <h2 class="text-4xl font-spartan text-left tracking-tight font-bold  ">
        Star 4
      </h2>

    </div>

    <!-- Star Card -->
    <article
      class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-amber-400 bg-blue-800">
      <!-- grid -->
      <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center transition-colors border-amber-400 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-white hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            20
          </h2>

          <h3 class="font-bold">Minimum Score</h3>
        </div>

        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center hover:border-white hover:text-white transition-colors border-amber-400 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            70
          </h2>

          <h3 class="font-bold">Maximum Score</h3>
        </div>

        <!--Total  -->
        <div
          class="p-4 text-center items-center border-amber-400 border-r-0 md:border-r-2 lg:border-r-2 hover:border-white hover:text-white transition-colors">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            90
          </h2>

          <h3 class="font-bold">Total</h3>
        </div>

        <!-- Percentage -->

        <div class="p-4 text-center items-center transition-colors hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            100 %
          </h2>

          <h3 class="font-bold">Percentage</h3>
        </div>
      </div>
    </article>


  </div>

  <!-- Star 5 -->
  <div class="space-y-5">
    <!-- icon -->
    <div class="text-blue-800 inline-flex items-center space-x-2">

      <!-- star svg -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current" enable-background="new 0 0 24 24"
        height="24px" viewBox="0 0 24 24" width="24px" fill="none">
        <rect fill="none" height="24" width="24" />
        <path
          d="M8.58,10H1l6.17,4.41L4.83,22L11,17.31L17.18,22l-2.35-7.59L21,10h-7.58L11,2L8.58,10z M21.36,22l-1.86-6.01L23.68,13h-3.44 l-3.08,2.2l1.46,4.72L21.36,22z M17,8l-1.82-6l-1.04,3.45L14.91,8H17z" />
      </svg>

      <h2 class="text-4xl font-spartan text-left tracking-tight font-bold  ">
        Star 5
      </h2>

    </div>

    <!-- Star Card -->
    <article
      class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-amber-400 bg-blue-800">
      <!-- grid -->
      <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center transition-colors border-amber-400 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-white hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            20
          </h2>

          <h3 class="font-bold">Minimum Score</h3>
        </div>

        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center hover:border-white hover:text-white transition-colors border-amber-400 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            70
          </h2>

          <h3 class="font-bold">Maximum Score</h3>
        </div>

        <!--Total  -->
        <div
          class="p-4 text-center items-center border-amber-400 border-r-0 md:border-r-2 lg:border-r-2 hover:border-white hover:text-white transition-colors">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            90
          </h2>

          <h3 class="font-bold">Total</h3>
        </div>

        <!-- Percentage -->

        <div class="p-4 text-center items-center transition-colors hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            100 %
          </h2>

          <h3 class="font-bold">Percentage</h3>
        </div>
      </div>
    </article>


  </div>

</div>

<!-- APARTMENTS section -->
<div class="  bg-blue-500/20 rounded-md p-6 mt-4 space-y-8">


  <h2 class="text-3xl font-spartan text-center underline tracking-tight font-extrabold text-blue-800 ">
    B) APARTMENTS
  </h2>

  <!-- Star 1 -->
  <div class="space-y-5">
    <!-- icon -->
    <div class="text-blue-800 inline-flex items-center space-x-2">

      <!-- star svg -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current" enable-background="new 0 0 24 24"
        height="24px" viewBox="0 0 24 24" width="24px" fill="none">
        <rect fill="none" height="24" width="24" />
        <path
          d="M8.58,10H1l6.17,4.41L4.83,22L11,17.31L17.18,22l-2.35-7.59L21,10h-7.58L11,2L8.58,10z M21.36,22l-1.86-6.01L23.68,13h-3.44 l-3.08,2.2l1.46,4.72L21.36,22z M17,8l-1.82-6l-1.04,3.45L14.91,8H17z" />
      </svg>

      <h2 class="text-4xl font-spartan text-left tracking-tight font-bold  ">
        Star 1
      </h2>

    </div>

    <!-- Star Card -->
    <article
      class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-amber-400 bg-blue-800">
      <!-- grid -->
      <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center transition-colors border-amber-400 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-white hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            20
          </h2>

          <h3 class="font-bold">Minimum Score</h3>
        </div>

        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center hover:border-white hover:text-white transition-colors border-amber-400 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            70
          </h2>

          <h3 class="font-bold">Maximum Score</h3>
        </div>

        <!--Total  -->
        <div
          class="p-4 text-center items-center border-amber-400 border-r-0 md:border-r-2 lg:border-r-2 hover:border-white hover:text-white transition-colors">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            90
          </h2>

          <h3 class="font-bold">Total</h3>
        </div>

        <!-- Percentage -->

        <div class="p-4 text-center items-center transition-colors hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            100 %
          </h2>

          <h3 class="font-bold">Percentage</h3>
        </div>
      </div>
    </article>


  </div>

  <!-- Star 2 -->
  <div class="space-y-5">

    <!-- icon -->
    <div class="text-blue-800 inline-flex items-center space-x-2">

      <!-- star svg -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current" enable-background="new 0 0 24 24"
        height="24px" viewBox="0 0 24 24" width="24px" fill="none">
        <rect fill="none" height="24" width="24" />
        <path
          d="M8.58,10H1l6.17,4.41L4.83,22L11,17.31L17.18,22l-2.35-7.59L21,10h-7.58L11,2L8.58,10z M21.36,22l-1.86-6.01L23.68,13h-3.44 l-3.08,2.2l1.46,4.72L21.36,22z M17,8l-1.82-6l-1.04,3.45L14.91,8H17z" />
      </svg>

      <h2 class="text-4xl font-spartan text-left tracking-tight font-bold  ">
        Star 2
      </h2>

    </div>


    <!-- Star Card -->
    <article
      class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-amber-400 bg-blue-800">
      <!-- grid -->
      <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center transition-colors border-amber-400 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-white hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            20
          </h2>

          <h3 class="font-bold">Minimum Score</h3>
        </div>

        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center hover:border-white hover:text-white transition-colors border-amber-400 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            70
          </h2>

          <h3 class="font-bold">Maximum Score</h3>
        </div>

        <!--Total  -->
        <div
          class="p-4 text-center items-center border-amber-400 border-r-0 md:border-r-2 lg:border-r-2 hover:border-white hover:text-white transition-colors">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            90
          </h2>

          <h3 class="font-bold">Total</h3>
        </div>

        <!-- Percentage -->

        <div class="p-4 text-center items-center transition-colors hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            100 %
          </h2>

          <h3 class="font-bold">Percentage</h3>
        </div>
      </div>
    </article>


  </div>

  <!-- Star 3 -->
  <div class="space-y-5">
    <!-- icon -->
    <div class="text-blue-800 inline-flex items-center space-x-2">

      <!-- star svg -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current" enable-background="new 0 0 24 24"
        height="24px" viewBox="0 0 24 24" width="24px" fill="none">
        <rect fill="none" height="24" width="24" />
        <path
          d="M8.58,10H1l6.17,4.41L4.83,22L11,17.31L17.18,22l-2.35-7.59L21,10h-7.58L11,2L8.58,10z M21.36,22l-1.86-6.01L23.68,13h-3.44 l-3.08,2.2l1.46,4.72L21.36,22z M17,8l-1.82-6l-1.04,3.45L14.91,8H17z" />
      </svg>

      <h2 class="text-4xl font-spartan text-left tracking-tight font-bold  ">
        Star 3
      </h2>

    </div>

    <!-- Star Card -->
    <article
      class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-amber-400 bg-blue-800">
      <!-- grid -->
      <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center transition-colors border-amber-400 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-white hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            20
          </h2>

          <h3 class="font-bold">Minimum Score</h3>
        </div>

        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center hover:border-white hover:text-white transition-colors border-amber-400 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            70
          </h2>

          <h3 class="font-bold">Maximum Score</h3>
        </div>

        <!--Total  -->
        <div
          class="p-4 text-center items-center border-amber-400 border-r-0 md:border-r-2 lg:border-r-2 hover:border-white hover:text-white transition-colors">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            90
          </h2>

          <h3 class="font-bold">Total</h3>
        </div>

        <!-- Percentage -->

        <div class="p-4 text-center items-center transition-colors hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            100 %
          </h2>

          <h3 class="font-bold">Percentage</h3>
        </div>
      </div>
    </article>


  </div>

  <!-- Star 4 -->
  <div class="space-y-5">
    <!-- icon -->
    <div class="text-blue-800 inline-flex items-center space-x-2">

      <!-- star svg -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current" enable-background="new 0 0 24 24"
        height="24px" viewBox="0 0 24 24" width="24px" fill="none">
        <rect fill="none" height="24" width="24" />
        <path
          d="M8.58,10H1l6.17,4.41L4.83,22L11,17.31L17.18,22l-2.35-7.59L21,10h-7.58L11,2L8.58,10z M21.36,22l-1.86-6.01L23.68,13h-3.44 l-3.08,2.2l1.46,4.72L21.36,22z M17,8l-1.82-6l-1.04,3.45L14.91,8H17z" />
      </svg>

      <h2 class="text-4xl font-spartan text-left tracking-tight font-bold  ">
        Star 4
      </h2>

    </div>

    <!-- Star Card -->
    <article
      class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-amber-400 bg-blue-800">
      <!-- grid -->
      <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center transition-colors border-amber-400 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-white hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            20
          </h2>

          <h3 class="font-bold">Minimum Score</h3>
        </div>

        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center hover:border-white hover:text-white transition-colors border-amber-400 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            70
          </h2>

          <h3 class="font-bold">Maximum Score</h3>
        </div>

        <!--Total  -->
        <div
          class="p-4 text-center items-center border-amber-400 border-r-0 md:border-r-2 lg:border-r-2 hover:border-white hover:text-white transition-colors">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            90
          </h2>

          <h3 class="font-bold">Total</h3>
        </div>

        <!-- Percentage -->

        <div class="p-4 text-center items-center transition-colors hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            100 %
          </h2>

          <h3 class="font-bold">Percentage</h3>
        </div>
      </div>
    </article>


  </div>

  <!-- Star 5 -->
  <div class="space-y-5">
    <!-- icon -->
    <div class="text-blue-800 inline-flex items-center space-x-2">

      <!-- star svg -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-current" enable-background="new 0 0 24 24"
        height="24px" viewBox="0 0 24 24" width="24px" fill="none">
        <rect fill="none" height="24" width="24" />
        <path
          d="M8.58,10H1l6.17,4.41L4.83,22L11,17.31L17.18,22l-2.35-7.59L21,10h-7.58L11,2L8.58,10z M21.36,22l-1.86-6.01L23.68,13h-3.44 l-3.08,2.2l1.46,4.72L21.36,22z M17,8l-1.82-6l-1.04,3.45L14.91,8H17z" />
      </svg>

      <h2 class="text-4xl font-spartan text-left tracking-tight font-bold  ">
        Star 5
      </h2>

    </div>

    <!-- Star Card -->
    <article
      class="max-w-6xl transition-colors duration-300 mt-8 mx-auto rounded-md text-sm leading-6 font-medium py-3 text-amber-400 bg-blue-800">
      <!-- grid -->
      <div class="md:grid-cols-4 lg:grid-cols-4 grid-cols-2 grid space-y-2 space-x-2">
        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center transition-colors border-amber-400 border-r-0 border-b-2 border-collapse md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0 hover:border-white hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            20
          </h2>

          <h3 class="font-bold">Minimum Score</h3>
        </div>

        <!-- Maximum Score -->
        <div
          class="p-4 text-center items-center hover:border-white hover:text-white transition-colors border-amber-400 border-r-0 border-b-2 md:border-r-2 lg:border-r-2 md:border-b-0 lg:border-b-0">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            70
          </h2>

          <h3 class="font-bold">Maximum Score</h3>
        </div>

        <!--Total  -->
        <div
          class="p-4 text-center items-center border-amber-400 border-r-0 md:border-r-2 lg:border-r-2 hover:border-white hover:text-white transition-colors">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            90
          </h2>

          <h3 class="font-bold">Total</h3>
        </div>

        <!-- Percentage -->

        <div class="p-4 text-center items-center transition-colors hover:text-white">
          <h2 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
            100 %
          </h2>

          <h3 class="font-bold">Percentage</h3>
        </div>
      </div>
    </article>


  </div>

</div>


</main>
<!-- end main -->

        <!-- footer section -->
        <footer class="text-center content-center grid ">
            <small class="text-white ">© 2022 - UTB E-GRADING SYSTEM | All rights Reserved</small>
        </footer>
    </section>
    <!-- js links -->
    <?php include_once './partials/foot.php'; ?>

</body>

</html>