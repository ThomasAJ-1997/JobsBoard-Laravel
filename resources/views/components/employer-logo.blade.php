@props(['employer','width' => 90])

<img src="{{asset($employer->logo)}}" alt="Job company image" class="rounded-xl" width="{{$width}}">
