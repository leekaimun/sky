<div class="my-4">
    <h4 class="mb-4 text-xl font-bold text-gray-700">Categories</h4>
    <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-[2rem] ltr:rounded-br-none rtl:rounded-bl-none shadow-md">
        <ul>
            @foreach($tags as $tag)
                <li class="px-1 py-4 border-b border-t border-white hover:border-gray-200 transition duration-300">
                    <a href="{{ route('tags',['category',$tag->slug]) }}" class="flex items-center text-gray-600 cursor-pointer">
                        {{ $tag->name }}
                        <span class="text-gray-500 ltr:ml-auto rtl:mr-auto">{{ $tag->posts_count }} Post</span>
                        <i class='text-gray-500 bx bx-right-arrow-alt ltr:ml-1 rtl:mr-1'></i>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>