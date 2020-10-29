@props(['name', 'type' =>'text', 'value' => null])

<div class="form-group">
    <label for="{{$name}}"> {{$name}} </label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" placeholder="Enter you {{$name}}" value="{{$value}}">
</div>
