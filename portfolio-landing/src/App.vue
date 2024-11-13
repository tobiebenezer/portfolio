<script setup>
</script>

<template>
  <!--<div
    class="h-screen pattern-isometric pattern-blue-500 pattern-bg-white pattern-size-6 pattern-opacity-20"
  ></div>-->
  <div class="relative bg-gray-900 overflow-x-hidden h-screen fira-mono-regular text-white">
    <div class="absolute inset-0 opacity-20 transform -skew-x-12 bg-glow_stripe"></div>
    <div class="relative z-10">
      <header>
        <nav
          class="flex sticky top-0 justify-between items-center px-6 py-2 shadow-lg md:px-[10rem] md:py-4"
        >
          <div class="w-25 text-3xl dancing-script-700 font-extrabold text-[#057af0]">
            <h2>Tobi Ebenezer</h2>
          </div>
          <div
            class="w-75 flex space-x-[2rem] font-bold text-xl justify-start items-start text-white"
          >
            <div>Home</div>
            <div>Profile</div>
            <div>Skills</div>
            <div>Portfolio</div>
            <div>Contact Me</div>
          </div>
        </nav>
      </header>

      <main class="">
        <div class="hero flex container mx-auto items-center justify-center h-75vh">
          <div class="mx-auto w-[50vw] my-[5rem]">
            <div class="mt-3">
              <span class="text-[1.5rem] font-bold text-3xl text-[#057af0]">{{ '<' }}</span>
              <span class="text-[1.5rem] font-bold text-3xl">{{ 'Hello' }}</span>
              <span class="text-[1.5rem] font-bold text-3xl text-[#057af0]">{{ '>' }}</span
              ><br />
            </div>

            <div class="mt-6">
              <span class="text-lg font-bold text-xl">I'm</span> &nbsp;
              <span class="jetbrains-mono font-extrabold text-7xl text-[#057af0]"
                >Tobi Ebenezer</span
              >
              <br />
            </div>

            <div class="mt-6">
              <span class="text-[#057af0] text-bold text-2xl pr-2">Software Developer</span>
              <span class="text-[#057af0] text-bold text-2xl border-x-2 border-white px-2"
                >Problem Solver</span
              >
              <span class="text-[#057af0] text-bold text-2xl pl-2">AI Enthusiast</span> <br />
            </div>
            <p class="my-6">
              I build robust, scalable software solution to real-world problems. With expertise in
              PHP, I ideas into inovative digital solutions. Let's transform your ideas into
              reality.
            </p>
            <div>
              <button class="rounded-lg bg-[#057af0] px-4 py-2 mr-3">Contact Me</button>
              <button class="rounded-lg border-2 border-gray-300 px-4 py-2 ml-3">
                Download CV
              </button>
            </div>
          </div>
          <div class="w-[50vw] flex place-content-center bg-glow_stripe">
            <img class="w-[70%]" src="./assets/img/programming.svg" alt="" />
          </div>
        </div>
        <div class="about relative h-75vh">
          <div class="strip-bg"></div>
          <div class="container mt-10 mx-auto flex items-center justify-center">
            <div class="w-[50vw] flex place-content-center flex-1 bg-glow_stripe">
              <img class="h-[30rem] scale-x-[1]" src="./assets/img/profile_img.png" alt="" />
            </div>
            <div class="flex-1">
              <h1 class="text-center text-3xl font-bold">
                <span class="text-[1.5rem] font-bold text-3xl text-[#057af0]">{{ '<' }}</span
                >About Me<span class="text-[1.5rem] font-bold text-3xl text-[#057af0]">{{
                  '/>'
                }}</span>
              </h1>
              <div class="mt-6 p-4 border-2 border-[#21282f] rounded-md">
                I'm an experienced web developer who specializes in backend development with PHP and
                MySQL. I am proficient in Laravel, Livewire, and Filament. Also, I am skilled in
                frontend techonology including Vue Js, Bootstrap, SCSS, LESS, and Tailwind CSS. I
                build AI models ranging form NLP to computer vision. My priority is creating robust
                solution to solve problems.
              </div>
              <div class="mt-6">
                <span class="text-[#057af0] text-bold text-xl pr-2">
                  <span class="text-white">Back End</span> Development</span
                >
                <span class="text-[#057af0] text-bold text-xl border-l-2 border-white px-2">
                  <span class="text-white">Front End</span> Development</span
                >
                <span class="text-[#057af0] text-bold text-xl border-x-2 border-white px-2"
                  >Problem Solver</span
                >
                <span class="text-[#057af0] text-bold text-xl pl-2">AI Modelling</span> <br />
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</template>

<style scoped>
.strip-bg {
  height: 40rem;
  width: 100%;
  transform: skewy(-6deg);
  z-index: -5;
  position: absolute;
  top: -10%;
  left: 0;
  min-width: 100vw;
  background-color: #151f33;
}

::-webkit-scrollbar {
  width: 6px;
  background-color: #f5f5f5;
  display: none;
}
</style>
