<div class="container-fluid">
    <hr>
    <div class="d-flex justify-content-center pt-4">
        <h4 class="font-rubik font-size-30">CATEGORY</h4>
    </div>
    <div class="row p-2 justify-content-center">
        @if ($categoryimages->count())
        @foreach ($categoryimages as $categoryimage)
        @if ($categoryimage->category == 'FIBER' | $categoryimage->category == 'DOWN' | $categoryimage->category == 'SILICON')
        <div class="category-image p-2 parent-pos">
            <img class="w-100 br-10" src="data:image/jpeg;base64,{{base64_encode($categoryimage->image)}}" alt="">
            <a class="sale-btn nav-link text-light" href="{{route('shop.type',strtolower($categoryimage->category))}}">{{$categoryimage->category}}</a>
        </div>
        @endif
        @endforeach
        @else
        <div class="bg-white border mt-2">
            no image images
        </div>
        @endif
    </div>
</div>
