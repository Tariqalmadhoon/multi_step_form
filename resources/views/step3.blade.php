<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Step 3</title>

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

    @if (session('success'))
    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
    @endif
    <h1>Additional information</h1>
    <form action="{{ route('form.step3') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="bio">bio</label>
            <textarea name="bio" id="bio" placeholder="Bio" class="form-control @error('bio') is-invalid @enderror" rows="4"></textarea>
            @error('bio')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <a href="{{route('form.step2')}}" class="btn btn-dark px-5" style="margin-top: 10px;">Previous</a>

        <button type="submit"  class="btn btn-success px-5" style="margin-top: 10px;">send</button>

        <div class="page-indicator">
            <span class="page">Page 3</span>
            <span class="separator">of</span>
            <span class="total-pages">3</span>
        </div>

    </form>


</div>
</body>
</html>
