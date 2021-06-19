@extends('..layouts.homeLayout')
    @section('container')
        <form action="/takeNames/" method="POST">
            @csrf
            @for ($i = 0; $i < 10; $i++)
            <label>Distrito {{ $i+1 }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-male fa-lg"></i></div>
                </div>
                <input type="text" name="boy[]"  class="form-control" required autocomplete="on">
            </div> <br>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-female fa-lg"></i></div>
                </div>
                <input type="text" name="girl[]"  class="form-control" required autocomplete="on">
            </div>
            <br><br>
            @endfor
            <input type="submit" value="JUGAR" class="btn btn-success" style="width:40%;">
        </form><br><br>
        <form action="/generateNames/" method="POST">
            @csrf
            <input type="submit" value="Nombres al azar" class="btn btn-info" style="width:40%;">
        </form>
    @endsection
