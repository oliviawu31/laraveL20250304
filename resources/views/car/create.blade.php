<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Car Create form</h2>
  <form action="{{route('cars.store')}}" method="POST">
    {{-- @csrf --}}
    @csrf

    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3 mt-3">
        <label for="color">Color:</label>
        <input type="text" class="form-control" id="color" placeholder="Enter color" name="color">
      </div>
      <div class="mb-3 mt-3">
        <label for="type">Type:</label>
        <input type="text" class="form-control" id="type" placeholder="Enter type" name="type">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
