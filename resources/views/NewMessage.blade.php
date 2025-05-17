<!DOCTYPE html>
<html>
<head>
    <title>Status Updated</title>
</head>
<body>
  @foreach($details as $key=>$value)
   <p><strong>{{ ucfirst($key) }}:</strong> {{ $value }}</p>
  @endforeach
</body>
</html>