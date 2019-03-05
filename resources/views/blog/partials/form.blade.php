@csrf
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Title</label>
    <div class="col-md-4">
        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" id="title" name="title"
               placeholder="Title" value="{{old('title') ?? $blog->title}}" required autofocus>
        @if($errors->has('title'))
            <div class="invalid-feedback">
                {{$errors->get('title')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Description</label>
    <div class="col-md-4">
        <textarea type="text" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" id="description"
                  name="description"
                  placeholder="Description" required>{{old('description') ?? $blog->description}}</textarea>
        @if($errors->has('description'))
            <div class="invalid-feedback">
                {{$errors->get('description')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Body</label>
    <div class="col-md-4">
        <textarea class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}" id="summernote"
                  name="body"
                  placeholder="Body" required>{{old('body') ?? $blog->body}}</textarea>
        @if($errors->has('body'))
            <div class="invalid-feedback">
                {{$errors->get('body')[0]}}
            </div>
        @endif
    </div>
</div>
<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Category</label>
    <div class="col-md-4">
        <select type="text" class="form-control {{$errors->has('category') ? 'is-invalid' : ''}}" id="category"
                name="category">
            <option style="background-color: grey" disabled selected>Chose...</option>
            <option style="background-color: grey">Foods</option>
            <option style="background-color: grey">Drinks</option>
            <option style="background-color: grey">Travel</option>
            <option style="background-color: grey">Cofee</option>
        </select>
        @if($errors->has('category'))
            <div class="invalid-feedback">
                {{$errors->get('category')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file {{$errors->has('image') ? 'is-invalid' : ''}}" id="image"
           name="image">
    @if($errors->has('image'))
        <div class="invalid-feedback">
            {{$errors->get('image')[0]}}
        </div>
    @endif
</div>