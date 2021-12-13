<li>{{$child_category->nodi_descr}}</li>
@if($child_category->childs)
    <ul>
        @foreach($child_category->childs as $childCategory)
            <li>{{$childCategory->nodi_descr}} ({{$childCategory->childs->count()}})</li>
        @endforeach
    </ul>
@endif


