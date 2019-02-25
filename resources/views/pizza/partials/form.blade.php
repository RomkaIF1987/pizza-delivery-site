@csrf
<br>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-md-4">
        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name"
               placeholder="Name" value="{{old('name') ?? $pizza->name}}" required autofocus>
        @if($errors->has('name'))
            <div class="invalid-feedback">
                {{$errors->get('name')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Description</label>
    <div class="col-md-4">
        <textarea type="text" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}" id="description"
                  name="description"
                  placeholder="Description" required>{{old('description') ?? $pizza->description}}</textarea>
        @if($errors->has('description'))
            <div class="invalid-feedback">
                {{$errors->get('description')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Price</label>
    <div class="col-md-4">
        <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" id="price" name="price"
               placeholder="price" value="{{old('size') ?? $pizza->price}}" required autofocus>
        @if($errors->has('price'))
            <div class="invalid-feedback">
                {{$errors->get('price')[0]}}
            </div>
        @endif
    </div>
</div>
<div class="form-group">
    <label for="exampleFormControlFile1">Pizza image</label>
    <input type="file" class="form-control-file {{$errors->has('pizza_image') ? 'is-invalid' : ''}}" id="pizza_image"
           name="pizza_image">
    @if($errors->has('pizza_image'))
        <div class="invalid-feedback">
            {{$errors->get('pizza_image')[0]}}
        </div>
    @endif
</div>
