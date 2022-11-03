<template>

    <section class="h-screen w-full flex flex-col justify-center items-center bg-indigo-500">
        <h1 class="text-9xl font-extrabold text-white tracking-widest">404</h1>
        <div class="bg-[#FF6A3D] font-semibold px-2 text-sm rounded rotate-12 absolute">
            Page Not Found
        </div>
        <button class="mt-5">
        <a class="relative inline-block text-sm font-medium text-[#FFF] group active:text-orange-500 focus:outline-none focus:ring">
            <span class="relative block px-8 py-3 bg-indigo-500 border border-current hover:bg-indigo-700">
            <router-link :to="{name: 'home'}">Torna alla Home</router-link>
            </span>
        </a>
        </button>
    </section>


 </template>
 
 <script>
 export default {
 
 };
 </script>
 
 <style lang="scss">
 </style>