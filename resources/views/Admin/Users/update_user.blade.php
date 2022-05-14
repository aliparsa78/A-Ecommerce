
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{url('user_update/'.$user->id)}}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus />
            </div>
            <div>
                <x-label for="name" :value="__('LastName')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="lastName" value="{{$user->lastName}}" required autofocus />
            </div>
            
            <div>
                <x-label for="name" :value="__('City')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="city" value="{{$user->city}}" required autofocus />
            </div>
            <div>
                <x-label for="name" :value="__('Phone')" />
                <x-input id="name" class="block mt-1 w-full" type="number" name="phone" value="{{$user->phone}}" required autofocus />
            </div>
            <div>
                <x-label for="name" :value="__('Country')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="country" value="{{$user->country}}" required autofocus />
            </div>
            
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Address1')" />

                <textarea name="address1" class="block mt-1 w-full"  cols="30" rows="3" required autofocus>{{$user->address1}}</textarea>
            </div>
            <div>
                <x-label for="name" :value="__('Address2')" />
                <textarea name="address2" id="" class="block mt-1 w-full"  cols="30" rows="3" required autofocus>{{$user->address2}}</textarea>
            </div>

            <div class="flex items-center justify-end mt-4">
                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
