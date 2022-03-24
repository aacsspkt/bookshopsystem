<x-app-layout>
    <x-slot name="header">
        <h2 class="px-3 font-semibold text-3xl text-gray-800 leading-tight">
            <a href="{{ route('books.index') }}">
                {{ __('Book') }}
            </a>
        </h2>
        / Create
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1">
            <div class="bg-white shadow-md rounded mx-6 sm:mx-3 py-4 px-6">
                <div class="mb-2 flex">
                    <h4 class="font-bold  my-auto text-lg text-gray-700">
                        Create New Book
                    </h4>
                </div>
                {{-- <div class="w-full mb-1 border-gray-600 border-b-2 md:hidden"> --}}

                {{-- </div> --}}
                <div class="mb-2 md:my-4">
                    <form id="form-1" method="POST" action="{{ route('books.store') }}">
                        @csrf

                        <div class="mb-4 sm:max-w-xl">
                            <x-label for="title" :value="__('Title')" />

                            <input id="title"
                                class="block mt-1 w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-5 {{ $errors->first('title') ? 'border-red-400' : 'border-gray-300' }}"
                                type="text" name="title" value="{{ old('title') }}" required autofocus
                                placeholder="Title" />
                            @error('title')
                                <span class="text-sm text-red-400">{{ $errors->first('title') }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 sm:max-w-xl">
                            <x-label for="author" :value="__('Author Name')" />
                            <div class="grid gap-x-2 sm:grid-cols-2">
                                <div class="">
                                    <input id="firstname"
                                        class="block w-full mt-1 col-auto rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{ $errors->first('firstname') ? 'border-red-400' : 'border-gray-300' }}"
                                        type="text" name="firstname" value="{{ old('firstname') }}" required
                                        placeholder="First Name" />
                                    @error('firstname')
                                        <span class="text-sm text-red-400">{{ $errors->first('firstname') }}</span>
                                    @enderror
                                </div>
                                <div class="">
                                    <input id="surname"
                                        class="block w-full mt-1 col-auto rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{ $errors->first('surname') ? 'border-red-400' : 'border-gray-300' }}"
                                        type="text" name="surname" value="{{ old('surname') }}" required
                                        placeholder="Surname" />
                                    @error('surname')
                                        <span class="text-sm text-red-400">{{ $errors->first('surname') }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 sm:max-w-xl">
                            <x-label for="pages" :value="__('Number of Pages')" />

                            <input id="pages"
                                class="block mt-1 w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{ $errors->first('pages') ? 'border-red-400' : 'border-gray-300' }}"
                                type="text" name="pages" value="{{ old('pages') }}" required autofocus
                                placeholder="No. of Pages" />
                            @error('pages')
                                <span class="text-sm text-red-400">{{ $errors->first('pages') }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 sm:max-w-xl">
                            <x-label for="price" :value="__('Price')" />

                            <input id="price"
                                class="block mt-1 w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 {{ $errors->first('price') ? 'border-red-400' : 'border-gray-300' }}"
                                type="text" name="price" value="{{ old('price') }}" required autofocus
                                placeholder="Price" />
                            @error('price')
                                <span class="text-sm text-red-400">{{ $errors->first('price') }}</span>
                            @enderror
                        </div>

                        <button form="form-1"
                            class="w-full sm:w-24 inline-flex justify-center items-center rounded px-4 py-1.5 hover:shadow-md bg-blue-400 text-white disabled:opacity-25 transition ease-in-out duration-150">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
