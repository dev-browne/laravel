<div class ="form-group">
    <label for="title"></label>
    <input id="title" type="text" name="title" class = "form-control" value="{{  old('title',optional($post ?? null)->title)  }}" >
</div>
        <div class="form-group">
            <label for="content"></label>
            <textarea class ="form-control" id ="content"name="content">{{  old('content',optional($post ?? null)->content)  }}</textarea>
        </div>
        <div class ="mb-3">
            @if($errors->any())
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{  $error  }}</li>
                    @endforeach
                </ul>
            @endif
        </div>