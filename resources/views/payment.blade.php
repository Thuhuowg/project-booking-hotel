<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('home') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Chọn tỉnh thành')" />

            <select name="lang" id="lang-select">
                <option value="">Chọn tỉnh thành</option>
                @foreach($provinces as $province)
                <option value="{{$province->id}}">{{$province->name}}</option>
                @endforeach
            </select>

        </div>
        <div>
            <x-input-label for="email" :value="__('Chọn Khách sạn')" />

            <select name="lang" id="lang-select">
                <option value="">Chọn khách sạn</option>
                @foreach($provinces as $province)
                @if($province->hotels)
                    @foreach($province->hotels as $hotel)
                <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                        @endforeach
                @endif
                @endforeach
            </select>

        </div>
        <div>
            <x-input-label for="email" :value="__('Chọn Loại phong')" />

            <select name="lang" id="lang-select">
                <option value="">Chọn loại phòng</option>
                @foreach($provinces as $province)
                    @if($province->hotels)
                        @foreach($province->hotels as $hotel)
                            @if($hotel->types)
                                @foreach($hotel->types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </select>
        </div>

        <div>
            <x-input-label :value="__('Số lượng')" />
            <x-text-input  class="block mt-1 w-full" type="text" name="email"  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="email" :value="__('Số người (mặc định theo loại phòng)')" />
           Chi phí thanh toán <small>(đã bao gồm VAT): </small>

        </div>
        <!-- Password -->
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Mật khẩu')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

        <!-- Remember Me -->

        <div class="flex items-center justify-end mt-4">
<a href="#">
            <a class="ml-3 btn-outline-danger" href="{{route('home')}}">
                {{ __('Hủy') }}
            </a></a>
            <a href="">
            <x-primary-button class="ml-3" type="submit">
                {{ __('Đặt phòng') }}
            </x-primary-button></a>

        </div>
    </form>
</x-guest-layout>
