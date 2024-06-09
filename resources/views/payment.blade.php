<!DOCTYPE html>
<html>
<head>
    <title>Pay with Paymob</title>
</head>
<body>
    <form action="{{ route('pay') }}" method="POST">
        @csrf
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id">
        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id">
        <button type="submit">Pay</button>
    </form>
</body>
</html>
