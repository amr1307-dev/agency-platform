<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: system-ui, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .wrapper { max-width: 560px; margin: 0 auto; padding: 32px 16px; }
        .card { background: #fff; border-radius: 16px; padding: 32px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); }
        h1 { font-size: 20px; margin: 0 0 16px; }
        .row { display: flex; padding: 8px 0; border-bottom: 1px solid #eee; }
        .row:last-child { border: 0; }
        .label { width: 120px; font-weight: 600; color: #666; }
        .value { flex: 1; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="card">
            <h1>New Project Application</h1>
            <div class="row"><span class="label">Client</span><span class="value">{{ $details['name'] }}</span></div>
            <div class="row"><span class="label">Email</span><span class="value">{{ $details['email'] }}</span></div>
            <div class="row"><span class="label">Company</span><span class="value">{{ $details['company'] }}</span></div>
            <div class="row"><span class="label">WhatsApp</span><span class="value">{{ $details['whatsapp'] }}</span></div>
            <div class="row"><span class="label">Service</span><span class="value">{{ $details['service_type'] }}</span></div>
            <div class="row"><span class="label">Budget</span><span class="value">{{ $details['budget'] }}</span></div>
            <div class="row"><span class="label">Timeline</span><span class="value">{{ $details['timeline'] }}</span></div>
            <div class="row"><span class="label">Brief</span><span class="value">{{ $details['brief'] }}</span></div>
        </div>
    </div>
</body>
</html>
