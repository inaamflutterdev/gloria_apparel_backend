<!DOCTYPE html>
<html>
<head>
    <title>Request a Call</title>
</head>
<body>
    <h1>Request a Call</h1>

    @if(session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form method="POST" action="{{ route('store-contact') }}">
        @csrf
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" required>
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" required></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>