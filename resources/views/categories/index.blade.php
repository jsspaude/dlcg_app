<!DOCTYPE html>
<html>

<head>
    <title>DLCG App</title>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
</head>


<body>
    <div class="container">
        @foreach($categories as $key=> $category)
        <div>
            <div>
                <strong>{{$category['name']}}</strong>
            </div>
              @if(isset($category['children']))
            @foreach($category['children'] as $key=> $children)
            @if($children)
            <div>
                {{$children['name']}}
                @if(isset($children['children']))
                @foreach($children['children'] as $key=> $subChildren)
                <div>


                    {{$subChildren['name']}}
                    @if(isset($subChildren['children']))
                    @foreach($subChildren['children'] as $key=> $subSubChildren)
                    <div>

                        {{$subSubChildren['name']}}
                        @if(isset($subSubChildren['children']))
                        @foreach($subSubChildren['children'] as $key=> $subSubSubChildren)
                        <div>

                            {{$subSubSubChildren['name']}}

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


</body>

</html>
