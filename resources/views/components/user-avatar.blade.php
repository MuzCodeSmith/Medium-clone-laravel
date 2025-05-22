@props(['user'])
@if($user->image)
<img src="{{Storage::url($user->image)}}" class="h-12 w-12 rounded-full" alt="{{$user->name}}">
@else
<img src="https://img.freepik.com/premium-vector/user-profile-icon-vector-image-can-be-used-gaming-ecommerce_120816-406884.jpg?uid=R20122910&ga=GA1.1.1329374159.1713979181&semt=ais_hybrid&w=740" class="h-12 w-12 rounded-full" alt="{{$user->name}}">
@endif