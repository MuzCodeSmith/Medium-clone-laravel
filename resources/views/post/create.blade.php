<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <!-- tabs -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <form action="{{route('post.store')}}" method="post">
                    <!-- title -->
                    <div>
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>
                    <!-- content -->
                    <div class="mt-4">
                        <x-input-label for="content" :value="__('Content')" />
                        <x-input-textarea id="content" class="block mt-1 w-full" type="text" name="content" :value="old('content')" required >
                        </x-input-textarea>
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>