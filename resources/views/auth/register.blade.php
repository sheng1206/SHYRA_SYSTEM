@extends ('layouts.app')

@section('title', 'Create Account')

@section('content')

    <h1>
        Create an Account
    </h1>

    <form>
        <div>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name">

        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">

        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">

        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">

        </div>

        <button type="submit">
            Create Account
        </button>

    </form>

    <p>
        Already have an account?
        <a href="/login">Login</a>
    </p>

@endsection