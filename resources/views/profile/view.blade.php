<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="flex">
                    <div class="flex-1">
                        <h1 class="text-5xl">
                            {{$user->name}}
                        </h1>
                        <div class="mt-8 pr-8">
                            @forelse($posts as $post)
                            <x-post-item :post="$post"></x-post-item>
                            @empty
                            <p class="text-gray-400 text-center py-16">no posts found</p>
                            @endforelse
                        </div>
                    </div>
                    <div x-data="{
                        following: @json($user->isFollowedBy(auth()->user())),
                        followersCount:{{$user->followers->count()}},
                        follow() {
                            axios.post(`/follow/{{$user->id}}`)
                                .then(res => {
                                    this.following = !this.following;
                                    this.followersCount = res.data.followers;
                                    console.log(res.data);
                                })
                                .catch(err => console.log(err));
                        }
                    }" class="w-[320px] border-l px-8">
                        <x-user-avatar :user="$user" size="w-24 h-24"></x-user-avatar>
                        <h3 class="mt-4">{{$user->name}}</h3>
                        <p class="text-gray-500"> 
                        <span x-text="followersCount" ></span> followers</p>
                        <p>
                            {{$user->bio}}
                        </p>
                        @if(auth()->user() && auth()->user()->id !== $user->id)
                        <div class="mt-4">
                            <button
                                class="rounded-full px-4 py-2"
                                x-text="following ? 'Unfollow' : 'Follow'"
                                :class="following ? 'bg-emerald-200 text-gray-600 hover:bg-emerald-300' : 'bg-emerald-600 text-white hover:bg-emerald-700'"
                                @click="follow()">
                            </button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>