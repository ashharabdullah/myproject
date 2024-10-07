<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
</head>
<body>
    <h1>Please Verify Your Email Address</h1>
    <br>
    <br>

    @if (session('status') == 'verification-link-sent')
        <p>A new verification link has been sent to the email address you provided during registration.</p>
    @endif

    <p>Before proceeding, please check your email for a verification link.</p>
    <br>
    <br>
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">Resend Verification Email</button>
    </form>
</body>
</html>
