<section class="mt-[20px]">
    <x-container>
    <div class="flex justify-between">
        <div class="flex flex-col gap-[40px] w-[660px]">
            <div class="rounded-2xl bg-white p-[20px] relative">
                <ul class="flex gap-[5px]">
                    <li class="rounded-full bg-gray-500 text-white px-[10px] py-[5px]">
                        Видеонаблюдение
                    </li>
                    <li class="rounded-full bg-gray-500 text-white px-[10px] py-[5px]">
                        Казань
                    </li>
                </ul>
                <h1 class="font-bold text-[45px] max-w-[600px] pt-[42px] pb-[20px] leading-[52px]">
                    Установка и продажа систем видеонаблюдения
                </h1>
                <p class="text-gray-400 text-[18px]">
                    Понятным языком объясняем технические термины
                </p>
                <img src="{{ asset('images/spring.svg') }}" loading="lazy" alt="Изображение" class="absolute top-[13px] right-[23px]"">
            </div>
            <div class="rounded-2xl bg-card p-[20px] relative">
                <h1 class="font-bold text-white text-[45px]">
                    ARSHIN TECH
                </h1>
                <p class="text-white text-[18px] pt-[27px] pb-[77px] max-w-[480px]">
                    Объединение профессионалов, с большим опытом работы в сфере систем видеонаблюдения, контроля доступа и видеодомофонии.
                </p>
                <a href="#!" class="">
                    <button class="bg-white py-[5px] px-[10px] cursor-pointer items-center flex rounded-[20px] gap-[10px]">
                        <span class="text-text-link text-[22px]">
                            Оставить заявку
                        </span>
                        <img loading="lazy" src="{{asset ('images/arrow.svg')}}" alt="Стрелка">
                    </button>
                </a>
                <img src="{{asset('images/flower.svg')}}" alt="" class="absolute top-[119px] right-[42px]">
            </div>
        </div>
        <img src="{{asset('images/image1.png')}}" alt="Фотография" loading="lazy" class="justify-end flex">
    </div>
    </x-container>
</section>
