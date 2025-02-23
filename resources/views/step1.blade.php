<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Step 1</title>
</head>

<style>
    .page-indicator {

    font-family: 'Arial', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: bold;
    color: #4A90E2; /* Blue color */
    background-color: #f0f0f0;
    padding: 10px 20px;
    border-radius: 30px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px
}

.page-indicator .page, .page-indicator .total-pages {
    color: #2C3E50; /* Dark color */
    font-size: 20px;
}

.page-indicator .separator {
    margin: 0 10px;
    color: #BDC3C7; /* Gray color */
}

</style>
<body>

    <div class="container my-5">

        <h1>Basic Information</h1>
        <form action="{{ route('form.step1') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror


            <button type="submit"  class="btn btn-success px-5" style="margin-top: 10px;">Next</button>

            <div class="page-indicator">
                <span class="page">Page 1</span>
                <span class="separator">of</span>
                <span class="total-pages">3</span>
            </div>

        </form>
    </div>

</body>
</html>
