<x-app-layout>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <h1 class="text-5xl mb-4">{{$post->title}}</h1>
                <!-- avatar -->
                <x-follow-ctr :user="$post->user" class="flex gap-4">
                    <x-user-avatar :user="$post->user"></x-user-avatar>
                    <div>
                        <div class="flex gap-2">
                            <a href="{{route('profile.show',$post->user)}}" class="hover:underline">{{$post->user->name}}</a>
                            @if(auth()->user() && auth()->user()->id !== $post->user->id)
                            &middot;
                            <a href="#" :class="following ? 'text-red-500' : 'text-emerald-500' " @click="follow()" x-text="following ? 'Unfollow' : 'Follow'"></a>
                            @endif
                        </div>
                        <div class="flex gap-2 text-sm text-gray-500">
                            {{$post->readTime()}} min read
                            &middot;
                            {{$post->formatedDate()}}
                        </div>
                    </div>
                </x-follow-ctr>
                <!-- avatar -->

                @if($post->user_id == Auth::id())
                <div class="mt-8 py-4 border-t border-b border-gray-200">
                    <x-primary-button>
                        Edit Post
                    </x-primary-button>
                    <form class="inline-block" action="{{route('post.destroy',$post)}}" method="post">
                        @csrf
                        @method('delete')
                        <x-danger-button>
                            Delete Post
                        </x-danger-button>
                    </form>
                </div>
                @endif

                <!-- clap section -->
                <div class="mt-8 p-4 border-t border-b flex gap-4">
                    <x-clap-button :post="$post"></x-clap-button>
                    <button class="text-gray-500 flex items-center gap-2 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                        <span class="text-sm">0</span>
                    </button>
                </div>
                <!-- clap section -->

                <!-- post content section -->
                <div class="mt-8">
                    <img src="{{$post->imageUrl()}}" class="w-full h-80 object-cover" alt="{{$post->title}}">
                    <div class="mt-4">
                        {{$post->content}}
                    </div>
                </div>
                <!-- post content section -->

                <!-- category -->
                <div class="mt-8">
                    <span class="px-4 py-2 text-sm bg-gray-200 rounded-full">
                        {{$post->category->name}}
                    </span>
                </div>

                <!-- clap section -->
                <div class="mt-8 p-4 border-t border-b flex gap-4">
                    <x-clap-button :post="$post"></x-clap-button>
                    <button class="text-gray-500 flex items-center gap-2 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                        <span class="text-sm">0</span>
                    </button>
                </div>
                <!-- clap section -->

            </div>
        </div>
    </div>
</x-app-layout>