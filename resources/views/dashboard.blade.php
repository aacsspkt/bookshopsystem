<x-app-layout>
    <x-slot name="header">
        <h2 class="px-3 font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        {{-- card div --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid gap-y-3 md:grid-cols-3 lg:grid-cols-4">
            <div class="bg-white shadow-md rounded-lg py-2 mx-6 grid grid-cols-2 sm:mx-3 h-28">
                <div class="pl-6 py-6 border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 stroke-emerald-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                    </svg>
                </div>
                <div class="pr-6 py-6 border-gray-200">
                    <h3 class="text-4xl text-gray-700">10</h3>
                    <h3 class="font-semibold px-1 text-sm text-gray-500">Books</h3>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg py-2 grid grid-cols-2 mx-6 sm:mx-3 h-28">
                <div class="pl-6 py-6 border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 stroke-orange-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                    </svg>
                </div>
                <div class="pr-6 py-6 border-gray-200">
                    <h3 class="text-4xl text-gray-700">10</h3>
                    <h3 class="font-semibold px-1 text-sm text-gray-500">Cds</h3>
                </div>
            </div>
        </div>
        {{-- end card div --}}

        {{-- tables --}}
        <div class="mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 gap-y-3 lg:grid-cols-2">
            <div class="bg-white shadow-md rounded mx-6 sm:mx-3 p-4">
                <div class="mb-2">
                    <h4 class="font-bold text-lg text-gray-700">
                        Recent Books
                    </h4>
                </div>
                <div class="w-full mb-1 divide-blue- border-b-2 md:hidden"></div>
                <div class="mb-2">
                    <table class="table-auto min-w-full">
                        <thead class="border-b-2 border-gray-500">
                            <tr class="text-gray-500 text-sm hidden md:table-row">
                                <th class="text-left">#</th>
                                <th class="text-left">Title</th>
                                <th class="text-left">Aurthor Name</th>
                                <th class="text-left">Pages</th>
                                <th class="text-left">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($books as $book) --}}
                            <tr class="text-gray-500 font-light text-sm border-b flex flex-col py-1 md:table-row">
                                <td class="flex md:py-2 md:table-cell overflow-hidden" data-label="ID">
                                    <span class="w-2/5 md:hidden">Id</span> 1{{-- {{$book->id}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden" data-label="Title">
                                    <span class="w-2/5 md:hidden">Title</span>Alice in Wonderland{{-- {{$book->title}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden" data-label="Author Name">
                                    <span class="w-2/5 md:hidden">Author</span>Jonny Sins{{-- {{$book->firstname.' '.$book->surname}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden" data-label="No of Pages">
                                    <span class="w-2/5 md:hidden">No. of Pages</span>12{{-- {{$book->pages}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden" data-label="Price">
                                    <span class="w-2/5 md:hidden">Price</span>$20.49{{-- {{$book->price}} --}}
                                </td>
                            </tr>
                            <tr class="text-gray-500 font-light text-sm border-b flex flex-col py-1 md:table-row">
                                <td class="flex md:py-2 md:table-cell overflow-hidden" data-label="ID">
                                    <span class="w-2/5 md:hidden">Id</span> 1{{-- {{$book->id}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden" data-label="Title">
                                    <span class="w-2/5 md:hidden">Title</span>Alice in Wonderland{{-- {{$book->title}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden" data-label="Author Name">
                                    <span class="w-2/5 md:hidden">Author</span>Jonny Sins{{-- {{$book->firstname.' '.$book->surname}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden" data-label="No of Pages">
                                    <span class="w-2/5 md:hidden">No. of Pages</span>12{{-- {{$book->pages}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden" data-label="Price">
                                    <span class="w-2/5 md:hidden">Price</span>$20.49{{-- {{$book->price}} --}}
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-white shadow-md rounded mx-6 sm:mx-3 p-4">
                <div class="mb-2">
                    <h4 class="font-bold text-lg text-gray-700">
                        Recent Cds
                    </h4>
                </div>
                <div class="w-full mb-1 border-gray-600 border-b-2 md:hidden"></div>
                <div>
                    <table class="table-auto min-w-full">
                        <thead class="border-b-2 border-gray-500">
                            <tr class="text-gray-500 text-sm hidden md:table-row">
                                <th class="text-left">#</th>
                                <th class="text-left">Title</th>
                                <th class="text-left">Artist Name</th>
                                <th class="text-left">Play Length</th>
                                <th class="text-left">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($books as $book) --}}
                            <tr
                                class="text-gray-500 font-light text-sm border-b border-gray-300 flex flex-col py-1 md:table-row">
                                <td class="flex md:py-2 md:table-cell overflow-hidden">
                                    <span class="w-2/5 md:hidden">Id</span>1{{-- {{$book->id}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden">
                                    <span class="w-2/5 md:hidden">Title</span>Alice in Wonderland{{-- {{$book->title}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden">
                                    <span class="w-2/5 md:hidden">Artist Name</span>Jonny Sins{{-- {{$book->firstname.' '.$book->surname}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden">
                                    <span class="w-2/5 md:hidden">Play Length</span>12{{-- {{$book->pages}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden">
                                    <span class="w-2/5 md:hidden">Price</span>$20.49{{-- {{$book->price}} --}}
                                </td>
                            </tr>
                            <tr
                                class="text-gray-500 font-light text-sm border-b border-gray-300 flex flex-col py-1 md:table-row">
                                <td class="flex md:py-2 md:table-cell overflow-hidden">
                                    <span class="w-2/5 md:hidden">Id</span>1{{-- {{$book->id}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden">
                                    <span class="w-2/5 md:hidden">Title</span>Alice in Wonderland{{-- {{$book->title}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden">
                                    <span class="w-2/5 md:hidden">Artist Name</span>Jonny Sins{{-- {{$book->firstname.' '.$book->surname}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden">
                                    <span class="w-2/5 md:hidden">Play Length</span>12{{-- {{$book->pages}} --}}
                                </td>
                                <td class="flex md:py-2 md:table-cell overflow-hidden">
                                    <span class="w-2/5 md:hidden">Price</span>$20.49{{-- {{$book->price}} --}}
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- end tables --}}
    </div>

</x-app-layout>
