<li>{{$child->nodi_descr}}</li>
@if($child->nodi_descr)
    <ul>
        @foreach($child->nodi_descr as $childCategory)
            @include('child_category',['child_category'=>$childCategory])
        @endforeach
    </ul>
@endif
