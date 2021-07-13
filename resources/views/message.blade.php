<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Message project</title>
</head>
<body>
<div class="container">
    <form action="/store" method="POST">
        {{--        individual token for the form to prevent injection--}}
        @csrf
        <div class="form-group">
            <div class="d-flex justify-content-center font-weight-bold mt-5 mb-5">Please, enter the message below:</div>
            <label for="name">Enter the name</label>
            <div class="text-danger">{{$errors->first('name')}}</div>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <div class="text-danger">{{$errors->first('email')}}</div>
            <label for="email">Enter an email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                   required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <div class="text-danger">{{$errors->first('message')}}</div>
            <label for="mytextarea">Enter a message</label>
            <textarea name="message" class="form-control" id="mytextarea" required></textarea></div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
        </div>
    </form>
    {{--    Messages, that have been saved by clicking Submit button are shown below--}}
    <div class="d-flex justify-content-center font-weight-bold mt-5 mb-5">Messages that have been sent before:</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Create date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
            <tr>
                <td>{{$message->id}}</td>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
                <td>{{$message->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="/js/app.js"></script>
</body>
</html>
