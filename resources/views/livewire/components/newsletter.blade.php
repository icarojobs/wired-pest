<div class="bg-white">
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8">
      <div class="px-6 py-6 bg-indigo-700 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
        <div class="xl:w-0 xl:flex-1">
          <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
            Want product news and updates?
          </h2>
          <p class="max-w-3xl mt-3 text-lg leading-6 text-indigo-200">
            Sign up for our newsletter to stay up to date.
          </p>
        </div>
        <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
          <form wire:submit.prevent='store' class="sm:flex">
            <label for="emailAddress" class="sr-only">Email address</label>
            
            <input wire:model='email' name="email" type="text" autocomplete="email" class="w-full px-5 py-3 placeholder-gray-500 border-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white" placeholder="Enter your email">
            
            <button type="submit" class="flex items-center justify-center w-full px-5 py-3 mt-3 text-base font-medium text-white bg-indigo-500 border border-transparent rounded-md shadow hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white sm:mt-0 sm:ml-3 sm:w-auto sm:flex-shrink-0">
              Notify me
            </button>
          </form>
        </div>
      </div>


      <!-- Alert Message -->
    @if(filled($errors->first()))
      <div class="p-4 rounded-md bg-yellow-50">
        <div class="flex">
          <div class="flex-shrink-0">
            <!-- Heroicon name: solid/exclamation -->
            <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="ml-3">
            <h3 class="text-sm font-medium text-yellow-800">
              Attention needed
            </h3>
            <div class="mt-2 text-sm text-yellow-700">
              <p>
                {{ $errors->first() }}
              </p>
            </div>
          </div>
        </div>
      </div>
      @endif
      <!-- Alert Message -->

    </div>
</div> 