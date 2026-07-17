<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Application Details</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f5f5f5; margin: 40px; }
    .mail-container {
      background: #fff;
      padding: 25px 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      max-width: 500px;
      margin: auto;
    }
    h2 { text-align: center; color: #333; border-bottom: 2px solid #eee; padding-bottom: 10px; }
    .info { margin-top: 20px; font-size: 16px; }
    .info p { margin: 10px 0; }
    .info span { font-weight: 600; color: #101436; }
  </style>
</head>
<body>
  <div class="mail-container">
    <h2>📩 New Course Application</h2>
    <div class="info">
      <p><span>Name:</span> {{ $data['name'] }}</p>
      <p><span>Mobile:</span> {{ $data['number'] }}</p>
      <p><span>Email:</span> {{ $data['email'] }}</p>
      <p><span>Courses Selected:</span> {{ $data['multiSelect'] }}</p>
    </div>
  </div>
</body>
</html>
