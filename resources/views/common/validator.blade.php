@if (count($errors))
    <div class="alert alert-danger">
        <!-- 所有的错误提示 -->
        <div class="alert alert-danger">
            <ul>
                <li>{{$errors->first()}}</li>
            </ul>
        </div>
        {{--<ul>--}}
            {{--@foreach($errors->all() as $error)--}}
                {{--<li>{{$error}}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    </div>
@endif