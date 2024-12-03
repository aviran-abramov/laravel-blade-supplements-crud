@props([
    "color",
    "href" => "#"
])

<a {{ $attributes->merge(["class" => "$color text-center border border-black hover:text-white p-2 rounded"]) }} href="{{ $href }}">{{ $slot }}</a>
