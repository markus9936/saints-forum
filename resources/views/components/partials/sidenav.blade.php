<aside class="col-span-1 space-y-6 text-gray-600">
    <div class="p-4 space-y-4 bg-white shadow">
        <div>
            <a href="{{ route('threads.create') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-green-500 border border-transparent rounded hover:bg-green-400 active:bg-blue-600 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-post-fill" viewBox="0 0 16 16">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1 0-1zm0 3h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5z"/>
                  </svg>
                 {{ __('Post') }}
            </a>
        </div>
        <div class="flex items-center flex-grow">

            <div class="p-2 text-white bg-blue-200 border rounded-l">
                <x-heroicon-o-search class="w-6 h-6" />
            </div>
            <input type="search" name="" id="" class="w-full border-none rounded-r shadow-inner bg-blue-50 focus:ring-blue-200" placeholder="Cari">
        </div>
    </div>
</aside>
