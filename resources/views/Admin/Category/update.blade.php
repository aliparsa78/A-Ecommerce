
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="/update_category/{{$category->id}}">
            @csrf
            
            <!-- Category -->
            <div class="mt-4">
                
                <x-label for="category" :value="__('Category Name')" />

                <x-input id="categoy" class="block mt-1 w-full" value="{{$category->name}}"
                type="text"
                name="category"
                required autocomplete="category" />
            </div>

            <!-- Featured -->
            <div class="mt-4">
                <x-label for="featured" :value="__('Featured')" />
                <input type="radio" name = "featured" value = "1"<?php if($category->featured==1){echo "checked";} ?>> 1
                <input type="radio" name = "featured" value = "0" style="margin-left:50px;" <?php if($category->featured==0){echo "checked";} ?>> 0

            </div>
            <!-- Active -->
            <div class="mt-4">
                <x-label for="active" :value="__('active')" />

                <input type="radio" name = "active" value = "1" <?php if($category->active==1){echo "checked";}?> > 1
                <input type="radio" name = "active" value = "0" style="margin-left:50px;" <?php if($category->active==0){echo "checked";}?> > 0

            </div>
            

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Add category') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
