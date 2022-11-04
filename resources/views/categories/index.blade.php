<!DOCTYPE html>
<html>

<head>
    <title>DLCG App</title>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
</head>


<body>
    <div class="container">
        @foreach($categories as $key=> $category)
        <div class="parent_container">
            <div data-id="{{$category['id']}}">
                <strong>{{$category['name']}}</strong>
                (<span>{{$category['id']}}</span>)
            </div>
            @if(isset($category['children']))
            @foreach($category['children'] as $key=> $children)
            @if($children)
            <div data-id="{{$children['id']}}">
                {{$children['name']}}
                (<span>{{$children['id']}}</span>)
                @if(isset($children['children']))
                @foreach($children['children'] as $key=> $subChildren)
                <div>
                    {{$subChildren['name']}}
                    (<span>{{$subChildren['id']}}</span>)
                    @if(isset($subChildren['children']))
                    @foreach($subChildren['children'] as $key=> $subSubChildren)
                    <div data-id="{{$subChildren['id']}}">
                        {{$subSubChildren['name']}}
                        (<span>{{$subSubChildren['id']}}</span>)
                        @if(isset($subSubChildren['children']))
                        @foreach($subSubChildren['children'] as $key=> $subSubSubChildren)
                        <div data-id="{{$subSubChildren['id']}}">
                            {{$subSubSubChildren['name']}}
                            (<span>{{$subSubSubChildren['id']}}</span>)
                        </div>
                        @endforeach
                        @endif
                    </div>
                    @endforeach
                    @endif
                </div>
                @endforeach
                @endif
            </div>
            @endif
            @endforeach
        </div>
        @endif
        @endforeach
    </div>

    <form action="{{ url('/') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <div>
            <label for="name">Product Name</label>
            <input type="text" name="name" id="product-name" class="form-control">
            <label for="name">Parent Category ID</label>
            <input type="integer" name="parent_id" id="product-parent-id" class="form-control">
        </div>



        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Product
                </button>
            </div>
        </div>
    </form>
</body>

</html>
