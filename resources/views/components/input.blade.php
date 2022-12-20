<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" aria-describedby="helpID">
    <span class="text-danger">
        {{-- @error('name')
            {{$message}}
        @enderror --}}
    </span>
</div>