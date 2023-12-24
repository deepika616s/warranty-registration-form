<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty Registration Form</title>
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        form { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 90%; max-width: 400px; margin: auto; }
        h1 { text-align: center; color: #333; }
        label { display: block; margin-bottom: 8px; color: #555; }
        input, select, textarea { width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        input[type="file"] { margin-top: 4px; }
        select { appearance: none; -webkit-appearance: none; -moz-appearance: none; background: url('data:image/svg+xml;utf8,<svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>') no-repeat right 8px center/12px 12px; }
        input[type="submit"] { background-color: #007bff; color: #fff; cursor: pointer; font-size: 16px; padding: 10px; border: none; border-radius: 4px; width: 100%; }
        input[type="submit"]:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div> <h1> Warranty Registration form </h1>
    <form action="submit_data.php" method="post" enctype="multipart/form-data">
        <label for="orderNo">Installation Service Order No:</label>
        <input type="text" name="orderNo" required pattern="[A-Za-z]{3}[0-9]{10}" title="Invalid format. Example: BLR1234567890">
        
        <label for="model">Model Name:</label>
        <select name="model" required>
            <option value="LTW">LTW</option>
            <option value="Aero">Aero</option>
        </select>
        
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="email">Email Address:</label>
        <input type="email" name="email" required>
        
        <label for="mobile">Mobile Number:</label>
        <input type="tel" name="mobile" required>
        
        <label for="address">Address:</label>
        <textarea name="address" required></textarea>
        
        <label for="city">City:</label>
        <input type="text" name="city" required>
        
        <label for="state">State:</label>
        <input type="text" name="state" required>
        
        <label for="pincode">Pincode:</label>
        <input type="text" name="pincode" required>
        
        <label for="serial">Serial Number:</label>
        <input type="text" name="serial" required>
        
        <label for="purchaseDate">Purchase Date:</label>
        <input type="date" name="purchaseDate" required>
        
        <label for="invoice">Scan of Invoice (PDF):</label>
        <input type="file" name="invoice" accept=".pdf" required>

        <label for="registrationForm">Scan of Life Time Warranty Registration Form (PDF):</label>
        <input type="file" name="registrationForm" accept=".pdf" required>

        <input type="submit" name="submit" value="Submit">
    </form>
</div>
</body>
</html>
