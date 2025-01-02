@foreach($results as $result)
    <div class="px-5 mt-5">
        <div class="bg-white rounded-md max-w-4xl mx-auto p-4 space-y-4 shadow-lg">
            <h3 class="font-semibold">{{ $result->name }}</h3>
            <p>{!! $result->text !!}</p>
        </div>
    </div>
@endforeach

<div class="max-w-4xl mx-auto px-5 mt-5">
    {{$results->links('search-pagination')}}
</div>
