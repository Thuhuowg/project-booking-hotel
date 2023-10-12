<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="full_name" :value="__('Họ và tên')" />
            <x-text-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')" required autofocus autocomplete="full_name" />
            <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
        </div>
        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Địa chỉ')" />

            <x-text-input id="address" class="block mt-1 w-full"
                          type="text"
                          name="address"/>
{{--                          required autofocus autocomplete="" />--}}

            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <!--Phone number -->
        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Số điện thoại')" />

            <x-text-input id="phone_number" class="block mt-1 w-full"
                          type="number"
                          name="phone_number"/>
{{--                          required autofocus autocomplete="new-password" />--}}

            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>
        <!--gender-->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Giới tính')" />

            <input type="radio" name="gender" value="Nam"> Nam<br>
            <input type="radio" name="gender" value="Nữ"> Nữ

            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
        <!--Birthday -->
        <div class="mt-4">
            <x-input-label for="birthday" :value="__('Ngày sinh')" />

            <input type="date" name="birthday" >

            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mật khẩu')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Xác nhận mật khẩu')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Bạn đã đăng ký? ') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __(' Đăng ký ') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
