{{-- @extends('layouts.app') --}}
<div class="flex items-center justify-center">
    <h1>Form</h1>
    {{-- @if($errors->any())
    @foreach ($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
    @endif --}}
    <form action="users" method="post" class="flex">
        @csrf
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control"><br>
            <span style="color: red">@error('name')
            {{$message}}
            @enderror</span><br>
        </div>
        <div class="form-group">
            <label for="email">Enter your email</label>
            <input type="text" name="email" placeholder="Enter your email" id="email" class="form-control"><br>
            <span style="color: red">@error('email')
                {{$message}}
            @enderror</span><br>
        </div>
        <div class="form-group">
            <label for="message">Enter your message</label>
            <textarea type="text" name="message" placeholder="Enter message" id="message" class="form-control"></textarea><br>
            <span style="color: red">@error('message')
                {{$message}}
            @enderror</span><br>
        </div>
        <button type="submit" class="btn button-success">Send message</button>
    </form>
</div>
