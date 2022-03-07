<x-app-layout>
    <x-slot name="header">
        <h2 class="px-3 font-semibold text-3xl text-gray-800 leading-tight">
            <a href="{{ route('books.index') }}">
                {{ __('Book') }}
            </a>
        </h2>
        / Detail
    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1">
            <div class="bg-white shadow-md rounded mx-6 sm:mx-3 py-4 px-6">
                <div class="mb-2 flex">
                    <h4 class="font-bold  my-auto text-lg text-gray-700">
                        Book Details
                    </h4>

                </div>
                <div class="mb-2 md:my-4">
                    <div class="p-5 rounded-t flex justify-start items-start border">
                        <h4 class="w-24 sm:w-32 text-sm text-gray-500">Id</h4>
                        <h4 class="w-full text-sm text-gray-500">{{ $book->id }}</h4>
                    </div>
                    <div class="p-5 flex justify-start items-start border-x border-b">
                        <h4 class="w-24 sm:w-32 text-sm text-gray-500">Title</h4>
                        <h4 class="w-full text-sm text-gray-500">{{ $book->title }}</h4>
                    </div>
                    <div class="p-5 flex justify-start items-start border-x border-b">
                        <h4 class="w-24 sm:w-32 text-sm text-gray-500">Author</h4>
                        <h4 class="w-full text-sm text-gray-500">{{ $book->firstname . ' ' . $book->surname }}
                        </h4>
                    </div>
                    <div class="p-5 flex justify-start items-start border-x border-b">
                        <h4 class="w-24 sm:w-32 text-sm text-gray-500">Pages</h4>
                        <h4 class="w-full text-sm text-gray-500">{{ $book->pages }}</h4>
                    </div>
                    <div class="p-5 flex justify-start items-start border-x border-b">
                        <h4 class="w-24 sm:w-32 text-sm text-gray-500">Price</h4>
                        <h4 class="w-full text-sm text-gray-500">{{ $book->price }}</h4>
                    </div>
                    <div class="p-5 rounded-b flex justify-start items-start border-x border-b">
                        <a href="{{ route('books.edit', $book->id) }}"
                            class="w-full sm:w-24 inline-flex justify-center items-center rounded px-4 py-1.5 hover:shadow-md bg-blue-400 text-white disabled:opacity-25 transition ease-in-out duration-150 mr-2 sm:mr-4">
                            Edit
                        </a>
                        <form id="form{{ $book->id }}">
                            @csrf
                            @method('delete')
                        </form>
                        <button type="submit" form="form{{ $book->id }}"
                            onclick="confirmDelete({{ $book->id }})"
                            class="w-full sm:w-24 inline-flex justify-center items-center rounded px-4 py-1.5 hover:shadow-md bg-red-500 text-white disabled:opacity-25 transition ease-in-out duration-150">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id) {

        }
    </script>
</x-app-layout>
