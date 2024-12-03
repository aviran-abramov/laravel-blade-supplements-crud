@props(["color"])

<button {{ $attributes->merge(["class" => "$color border border-black hover:text-white p-2 rounded"]) }} type="submit">{{ $slot }}</button>
