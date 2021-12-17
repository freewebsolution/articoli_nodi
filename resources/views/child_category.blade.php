<li>{{$child_category->nodi_descr}}</li>
@if($child_category->childs)
    <ul>
        @foreach($child_category->childs as $childCategory)
            @include('child_category',['child_category'=>$childCategory])
        @endforeach
    </ul>
@endif


