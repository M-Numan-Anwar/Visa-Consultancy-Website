@extends('layouts.app')

@section('content')

 <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="fa-solid fa-search"></i></button>
            </div>
        </form>
    </div>
    
@endsection