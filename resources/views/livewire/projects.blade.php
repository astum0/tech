<div>
    <x-container>
        <h1 class="text-gray-600 text-4xl text-center my-10">
            Посты
        </h1>
        <ul class="grid grid-cols-3 justify-between gap-8">
            @foreach ($posts as $post)
                    <li class="flex flex-col text-white text-center gap-4 p-2 bg-card rounded-xl">
                        <h3 class=" text-2xl">
                            {{$post->title}}
                        </h3>
                        <p>
                            <span class="text-2xl">Описание: </span>{{$post->description}}
                        </p>
                        <p>
                            <span class="text-2xl">Контент: </span>{{$post->content}}
                        </p>
                    </li>
            @endforeach
        </ul>
    </x-container>
</div>
