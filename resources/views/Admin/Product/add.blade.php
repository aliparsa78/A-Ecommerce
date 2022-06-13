<link rel="stylesheet" href="css/style.css">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="Add_product" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label id="x-label" for="name" :value="__('category')" />
                <select name="cat_id" class="form-select block mt-1 w-full" id="add-data">
                    @foreach($category as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>            
                    @endforeach
                </select>
                <!-- <x-input id="name" clas="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus /> -->
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('Name')" class="mt-4" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Enter product's name" required autofocus  />
            </div>
            <div class="mt-4">
                <x-label id="x-label" for="email" :value="__('description')" class="mt-4"/>

                <textarea name="description" class="block mt-1 w-full"  cols="30" rows="3" >
                    
                </textarea>
            </div>
            <div class="mt-4">
                <x-label id="x-label" :value="__('long description')" class="mt-4"/>

                <textarea name="longdescription" class="block mt-1 w-full"  cols="34" rows="4" >
                    
                </textarea>
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('original_price')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="text" name="original_price" :value="old('name')" placeholder="Enter the original price of product"  required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('selling_price')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full form-control" type="text" name="selling_price" :value="old('name')" placeholder="Enter the selling price of product"  required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('weight')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="text" name="weight" :value="old('name')" placeholder="Enter the weight of your product" required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="size" :value="__('size')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="text" name="size" :value="old('name')" placeholder="Enter the weight of your product" required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="size" :value="__('color')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="text" name="color" :value="old('name')" placeholder="Enter the weight of your product" required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('tax')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="text" name="tax" :value="old('name')" placeholder="Enter the tax that enact on your product" required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('quantity')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="integer" name="qty" :value="old('name')" placeholder="Entet your product quantity" required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('image')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="file" name="image" :value="old('name')" placeholder="" required autofocus  />
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
