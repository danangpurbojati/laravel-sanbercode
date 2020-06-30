@extends('layout')

@section('title', "Register")

@section('container')
    <h1>Buat Account Baru!</h1>

    <h3>Sign Up Form</h3>

    <form action="{{url('/welcome')}}">        
        
        <div>
            <p>First Name:</p>            
            <input type="text">
        </div>

        <div>
            <p>Last Name:</p>
            <input type="text">
        </div>

        <div>
            <p>Gender:</p>
            <input type="radio" name="gender" value=""> Male
            <br>
            <input type="radio" name="gender" value=""> Female
            <br>          
            <input type="radio" name="gender" value=""> Other      
        </div>

        <div>
            <p>Nationality:</p>
            <select name="">
                <option value="">Indonesian</option>
                <option value="">Singaporean</option>
                <option value="">Malaysia</option>
                <option value="">Australian</option>
            </select>
        </div>

        <div>
            <p>Languange Spoken:</p>
            <input type="checkbox">Bahasa Indonesia
            <br>
            <input type="checkbox">English
            <br>
            <input type="checkbox">Other
        </div>

        <div>
            <p>Bio:</p>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <button type="submit">Sign Up</button>
        </div>

    </form>
    
@endsection
    

