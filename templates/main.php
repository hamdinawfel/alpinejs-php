<div class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 mb-16"
x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak>
  <div class="mb-10 border-t border-b divide-y">
    <div class="grid py-8 sm:grid-cols-4">
      <div class="mb-4 sm:mb-0">
        <div class="space-y-1 text-xs font-semibold tracking-wide uppercase">
          <a href="/" class="transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category">Frontend</a>
          <p class="text-gray-600">28 Mars 2020</p>
        </div>
      </div>
      <div class="sm:col-span-3 lg:col-span-2">
        <div class="mb-3">
          <a href="/" aria-label="Article" class="inline-block text-black transition-colors duration-200 hover:text-deep-purple-accent-700">
            <p class="text-3xl font-extrabold leading-none sm:text-4xl xl:text-4xl">
             Blog post
            </p>
          </a>
        </div>
        <p class="text-gray-700">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <button type="button" class="bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 mt-6 px-4 rounded-full" @click="showModal = true">GET IT</button>
        <!--Overlay-->
		<div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal" :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
			<!--Dialog-->
			<div class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6" x-show="showModal" @click.away="showModal = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Simple Modal!</p>
					<div class="cursor-pointer z-50" @click="showModal = false">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
						</svg>
					</div>
				</div>

				<!-- content -->
				<p>Modal content with Alpine</p>
				<p>This modal is created for testing the integration of AlipneJS with php</p>
				<p>The state managment of this modal is created by alpineJS</p>
				<p>Thanks Alpine.js </p>

			</div>
			<!--/Dialog -->
		</div><!-- /Overlay -->
      </div>
    </div>
    <div class="grid py-8 sm:grid-cols-4">
      <div class="mb-4 sm:mb-0">
        <div class="space-y-1 text-xs font-semibold tracking-wide uppercase">
          <a href="/" class="transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category">Backend</a>
          <p class="text-gray-600">28 Mars 2020</p>
        </div>
      </div>
      <div class="sm:col-span-3 lg:col-span-2">
        <div class="mb-3">
          <a href="/" aria-label="Article" class="inline-block text-black transition-colors duration-200 hover:text-deep-purple-accent-700">
            <p class="text-3xl font-extrabold leading-none sm:text-4xl xl:text-4xl">
              Blog post
            </p>
          </a>
        </div>
        <p class="text-gray-700">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>
    <div class="grid py-8 sm:grid-cols-4">
      <div class="mb-4 sm:mb-0">
        <div class="space-y-1 text-xs font-semibold tracking-wide uppercase">
          <a href="/" class="transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800" aria-label="Category">Database</a>
          <p class="text-gray-600">28 Mars 2020</p>
        </div>
      </div>
      <div class="sm:col-span-3 lg:col-span-2">
        <div class="mb-3">
          <a href="/" aria-label="Article" class="inline-block text-black transition-colors duration-200 hover:text-deep-purple-accent-700">
            <p class="text-3xl font-extrabold leading-none sm:text-4xl xl:text-4xl">
              Blog post
            </p>
          </a>
        </div>
        <p class="text-gray-700">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>
  </div>
  <div class="text-center">
    <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
      See all articles
      <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
      </svg>
    </a>
  </div>
</div>