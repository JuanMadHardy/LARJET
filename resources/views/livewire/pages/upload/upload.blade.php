<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('upfile') }}"
                          id="uploadform"
                          name="formupload"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <section class="grid place-items-center bg-emerald-900 p-16">
                            <div class="flex gap-4">
                              <!-- Input: Designation [h-12] & min-w-[12rem] -->
                              <input class="h-12 min-w-[12rem]
                                            rounded-lg border-emerald-500
                                            indent-4 text-emerald-900
                                            shadow-lg focus:outline-none
                                            focus:ring
                                            focus:ring-emerald-600"
                                            name="upfile"
                                            type="file"
                                            placeholder="Upload File"
                                            accept=".png,.jpg,.jpeg,.pdf" />
                              <!-- Button: Submit [h-12] -->
                              <button class="h-12 min-w-[8rem]
                                            rounded-lg border-2
                                            border-emerald-600
                                            bg-emerald-500
                                            text-emerald-50
                                            shadow-lg hover:bg-emerald-600
                                            focus:outline-none
                                            focus:ring
                                            focus:ring-emerald-600">
                                            Submit
                            </button>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
