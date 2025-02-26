<header>
    <x-container>
        <div class="items-center mt-[20px] rounded-[20px] flex justify-between px-[10px] py-[10px] bg-white">
            <img src="{{ asset('images/logo.svg') }}" alt="Логотип" class="pl-[19px]">
            <nav>
                <menu class="flex gap-[15px]">
                    <li class="">
                        <a href="#!" class="bg-text-bg rounded-2xl px-[15px] py-[5px]">
                            Услуги
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="bg-text-bg rounded-2xl px-[15px] py-[5px]">
                            Схема работы
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="bg-text-bg rounded-2xl px-[15px] py-[5px]">
                            Контакты
                        </a>
                    </li>
                </menu>
            </nav>
            <span class="font-bold">
                +7 (843) 253-22-81
            </span>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="">Личный кабинет</a>
                    @else
                        <a href="{{ route('login')}}" class="">
                            Войти
                        </a>
                        @if(Route::has('register'))
                            <a href="{{route('register')}}" class="">
                                Зарегестрироваться
                            </a>
                        @endif
                @endauth
            @endif
        </div>
    </x-container>
</header>
