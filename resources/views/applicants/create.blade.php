<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Applicants</title>
</head>
<body>
    <h1>Create an Applicant</h1>
    
    <!-- Display success message -->
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display error message -->
    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('applicant.store') }}" method="post">
        @csrf
        @method('post')
        <input type="text" name="name" placeholder="Applicant's Name" required>
        <input type="email" name="email" placeholder="Applicant's Email" required>
        <input type="number" name="age" placeholder="Applicant's Age" required>
        <input type="submit" value="Create Applicant">
    </form>
</body>
</html>
