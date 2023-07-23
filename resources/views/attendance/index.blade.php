<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Atte') }}
        </h2>
    </x-slot>

    @if (Auth::check())
        <p class="text-center">
          
        </p>
    @endif

    <div class="m-20 grid grid-cols-2 gap-4 place-content-stretch h-48">
      <button
        class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md bg-gray-100 border border-transparent font-semibold text-gray-800 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 ring-offset-white focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:bg-gray-700 dark:hover:bg-gray-900 dark:text-white">
        勤務開始
      </button>

      <button
        class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md bg-gray-100 border border-transparent font-semibold text-gray-800 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 ring-offset-white focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:bg-gray-700 dark:hover:bg-gray-900 dark:text-white">
        勤務終了
      </button>

      <button
        class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md bg-gray-100 border border-transparent font-semibold text-gray-800 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 ring-offset-white focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:bg-gray-700 dark:hover:bg-gray-900 dark:text-white">
        休憩開始
      </button>

      <button
        class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md bg-gray-100 border border-transparent font-semibold text-gray-800 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 ring-offset-white focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:bg-gray-700 dark:hover:bg-gray-900 dark:text-white">
        休憩終了
      </button>

</x-app-layout>
