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

        <form method="POST" action="{{url('update_product/'.$product->id)}}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label id="x-label" for="name" :value="__('category')" />
                <select name="cat_id" class="form-select block mt-1 w-full" id="add-data">
                    @foreach($category as $item)
                        <option <?php if($item->id==$product->cat_id){echo "selected";} ?> value="{{$item->id}}">{{$item->name}}</option>            
                    @endforeach
                </select>
                <!-- <x-input id="name" clas="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus /> -->
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('Name')" class="mt-4" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$product->name}}" placeholder="Enter product's name" required autofocus  />
            </div>
            <div class="mt-4">
                <label for="desctiption" class="mt-4"/>desctiption</label>

                <textarea name="description" class="block mt-1 w-full"  cols="30" rows="3"  >
                {{$product->description}}
                </textarea>
            </div>
            <div class="mt-4">
                <label for="desctiption" class="mt-4"/>desctiption</label>

                <textarea name="longdescription" class="block mt-1 w-full"  cols="30" rows="3"  >
                {{$product->longdescription}}
                </textarea>
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('original_price')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="text" name="original_price" value="{{$product->original_price}}" placeholder="Enter the original price of product"  required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('selling_price')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full form-control" type="number" name="selling_price" value="{{$product->selling_price}}" placeholder="Enter the selling price of product"  required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('weight')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="number" name="weight" value="{{$product->weight}}" placeholder="Enter the weight of your product" required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('color')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="number" name="color" value="{{$product->color}}" placeholder="Enter the weight of your product" required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('tax')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="number" name="tax" value="{{$product->tax}}" placeholder="Enter the tax that enact on your product" required autofocus  />
            </div>

            <div>
                <x-label id="x-label" for="name" :value="__('size')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="number" name="size" value="{{$product->size}}" placeholder="Enter the tax that enact on your product" required autofocus  />
            </div>

            <div>
                <x-label id="x-label" for="name" :value="__('quantity')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="number" name="qty" value="{{$product->qty}}" placeholder="Entet your product quantity" required autofocus  />
            </div>
            <div>
                <x-label id="x-label" for="name" :value="__('image')" class="mt-4"/>
                <x-input id="input-form" class="block mt-1 w-full" type="file" name="image" :value="old('name')" placeholder=""   />
            </div>
            <div class="flex items-center justify-end mt-4">
                

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
