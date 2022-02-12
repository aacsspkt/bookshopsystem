<x-app-layout>
    <x-slot name="header">
        <h2 class="px-3 font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Book') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1">
            <div class="bg-white shadow-md rounded mx-6 sm:mx-3 p-4">
                <div class="mb-2 flex">
                    <h4 class="font-bold  my-auto text-lg text-gray-700">
                        Book Lists
                    </h4>
                    <button
                        class="ml-3 md:ml-16 hover:shadow-md mr-auto py-1 md:py-2 w-16 md:w-24 rounded bg-green-500 text-white">New</button>
                </div>
                <div class="w-full mb-1 border-gray-600 border-b-2 md:hidden"></div>
                <div class="mb-2 md:my-4">
                    <table class="table-auto min-w-full">
                        <thead class="border-b-2 border-gray-500">
                            <tr class="text-gray-500 text-sm hidden md:table-row">
                                <th class="text-left">#</th>
                                <th class="text-left">Title</th>
                                <th class="text-left">Aurthor Name</th>
                                <th class="text-left">Pages</th>
                                <th class="text-left">Price</th>
                                <th class="text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr class="text-gray-500 font-light text-sm border-b flex flex-col py-1 md:table-row">
                                    <td class="flex md:py-2 md:table-cell overflow-hidden">
                                        <span class="w-2/5 md:hidden">Id</span> {{ $book->id }}
                                    </td>
                                    <td class="flex md:py-2 md:table-cell overflow-hidden">
                                        <span class="w-2/5 md:hidden">Title</span>{{ $book->title }}
                                    </td>
                                    <td class="flex md:py-2 md:table-cell overflow-hidden">
                                        <span
                                            class="w-2/5 md:hidden">Author</span>{{ $book->firstname . ' ' . $book->surname }}
                                    </td>
                                    <td class="flex md:py-2 md:table-cell overflow-hidden">
                                        <span class="w-2/5 md:hidden">No. of Pages</span>{{ $book->pages }}
                                    </td>
                                    <td class="flex md:py-2 md:table-cell overflow-hidden">
                                        <span class="w-2/5 md:hidden">Price</span>${{ $book->price }}
                                    </td>
                                    <td class="md:py-1 md:table-cell overflow-hidden">
                                        <a class="inline-block bg-amber-400 rounded p-1 hover:shadow-lg"
                                            href="{{-- route('books.edit', $book->id) --}}">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 stroke-white opacity-80" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <a class="inline-block bg-red-500 rounded p-1 hover:shadow-lg"
                                            href="{{-- route('books.edit', $book->id) --}}">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 stroke-white opacity-80" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="container flex items-baseline justify-center mx-auto">
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
