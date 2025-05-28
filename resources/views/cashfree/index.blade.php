<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashfree Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <section class=" pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('payment'))
                        <div class="card my-3">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">Payment Details</h5>
                            </div>
                            <div class="card-body">
                                <p><strong>Payment ID:</strong> {{ session('payment')->payment_id }}</p>
                                <p><strong>Order Id:</strong> {{ session('payment')->order_id }}</p>
                                <p><strong>Amount:</strong> ₹{{ session('payment')->amount }}</p>
                            </div>
                        </div>
                    @endif

                    <div class="card p-3">
                        <h2>Cashfree Payment Integration</h2>
                        <form action="{{ route('cashfree.payment') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" name="phone" value="{{ old('phone') }}"
                                    class="form-control @error('phone') is-invalid @enderror">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount (INR)</label>
                                <input type="number" name="amount" value="{{ old('amount') }}"
                                    class="form-control @error('amount') is-invalid @enderror">
                                @error('amount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Proceed to Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js" integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous"></script>

</body>

</html>
