@extends ('layouts.app')

@section('title', 'Login')

@section('content')

    <h1>
        Log in
    </h1>

    <form>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>

        <button type="submit">
            Login
        </button>
    </form>

    <p>
        Don't have an account?
        <a href="/register">Create an account</a>

@endsection