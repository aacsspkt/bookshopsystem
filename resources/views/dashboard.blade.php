<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-2">
        {{-- card div --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid gap-y-3 md:grid-cols-3 lg:grid-cols-4">
            <div class="bg-white shadow-md rounded-lg py-2 mx-6 grid grid-cols-2 sm:mx-3 h-28">
                <div class="pl-6 py-6 border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px"
                        fill="#367ADF">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H8V4h12v12zM10 9h8v2h-8zm0 3h4v2h-4zm0-6h8v2h-8z" />
                    </svg>
                </div>
                <div class="pr-6 py-6 border-gray-200">
                    <h3 class="font-semibold text-gray-500">Total Books</h3>
                    <h3 class="text-4xl text-gray-600">10</h3>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg py-2 grid grid-cols-2 mx-6 sm:mx-3 h-28">
                <div class="pl-6 py-6 border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 24 24" width="40px"
                        fill="#367ADF">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-12.5c-2.49 0-4.5 2.01-4.5 4.5s2.01 4.5 4.5 4.5 4.5-2.01 4.5-4.5-2.01-4.5-4.5-4.5zm0 5.5c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z" />
                    </svg>
                </div>
                <div class="pr-6 py-6 border-gray-200">
                    <h3 class="font-semibold text-gray-500">Total Cds</h3>
                    <h3 class="text-4xl text-gray-600">10</h3>
                </div>
            </div>
        </div>
        {{-- end card div --}}

        {{-- tables --}}
        <div class="mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 gap-y-3 lg:grid-cols-2">
            <div class="bg-white shadow-md rounded mx-6 sm:mx-3 p-4">
                <div class="mb-2">
                    <h4 class="font-bold text-gray-600">
                        Recent Books
                    </h4>
                </div>
                <div class="w-full mb-1 border-gray-600 border-b-2 md:hidden"></div>
                <div class="mb-2">
                    <table class="table-auto min-w-full">
                        <thead class="border-b-2 border-gray-500">
                            <tr class="text-gray-500 hidden md:table-row">
                                <th class="text-left">#</th>
                                <th class="text-left">Title</th>
                                <th class="text-left">Aurthor Name</th>
                                <th class="text-left">Pages</th>
                                <th class="text-left">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($books as $book) --}}
                            <tr
                                class="text-gray-500 font-light text-sm border-b border-gray-300 flex flex-col py-1 md:table-row">
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
                            <tr
                                class="text-gray-500 font-light text-sm border-b border-gray-300 flex flex-col py-1 md:table-row">
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
                    <h4 class="font-bold text-gray-600">
                        Recent Cds
                    </h4>
                </div>
                <div class="w-full mb-1 border-gray-600 border-b-2 md:hidden"></div>
                <div>
                    <table class="table-auto min-w-full">
                        <thead class="border-b-2 border-gray-500">
                            <tr class="text-gray-500 hidden md:table-row">
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
