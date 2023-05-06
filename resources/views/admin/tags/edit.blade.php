<x-app-layout>

    {{-- Header --}}
    

    <section class="mx-6">
        <div class="p-8">
            <x-form action="{{ route('admin.tags.update', $tag) }}" method="PUT">
                <div class="space-y-8">
                    {{-- Name --}}
                    <div>
                        <x-form.label for="name" value="{{ __('Edit tag') }}" />
                        <x-form.inpum id="name" class="block w-full mt-1" type="text" name="name" :value="$tag->name" required autofocus />
                        <x-form.error for="name" />
                    </div>

                    {{-- Button --}}
                    <x-buttons.save>
                        {{ __('Update') }}
                    </x-buttons.save>
            </x-form>
        </div>
    </section>
</x-app-layout>
