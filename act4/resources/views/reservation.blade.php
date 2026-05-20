<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cap Reservation | Activity 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f0f2f5; font-family: 'Inter', sans-serif; }
        .reservation-card { 
            background: white; 
            border-radius: 20px; 
            box-shadow: 0 15px 35px rgba(0,0,0,0.1); 
            border: none;
        }
        .header-section {
            background: #17408B;
            color: white;
            padding: 2rem;
            border-radius: 20px 20px 0 0;
            text-align: center;
        }
        .btn-reserve {
            background: #C9082A;
            color: white;
            font-weight: bold;
            padding: 12px;
            transition: 0.3s;
        }
        .btn-reserve:hover { background: #a50622; color: white; transform: scale(1.02); }
        .error-span { color: #C9082A; font-size: 0.85rem; font-weight: 500; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card reservation-card">
                <div class="header-section">
                    <h2 class="mb-0 text-uppercase">🧢 Limited Edition Reservation</h2>
                    <p class="mb-0 opacity-75 small">Secure your vintage headwear below</p>
                </div>

                <div class="card-body p-4">
                    @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger pb-0">
                            <ul class="small">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="reservationForm" action="{{ route('reservation.store') }}" method="POST">
                        @csrf <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}">
                            @error('full_name') <span class="error-span">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-7 mb-3">
                                <label class="form-label fw-bold">Email Address</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label class="form-label fw-bold">Qty (Max 3)</label>
                                <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Cap Style Preference</label>
                            <select name="cap_style" class="form-select">
                                <option value="">-- Select a style --</option>
                                <option value="snapback" {{ old('cap_style') == 'snapback' ? 'selected' : '' }}>90s Snapback</option>
                                <option value="fitted" {{ old('cap_style') == 'fitted' ? 'selected' : '' }}>Authentic Fitted</option>
                                <option value="trucker" {{ old('cap_style') == 'trucker' ? 'selected' : '' }}>Foam Trucker</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Collector Note</label>
                            <textarea name="note" class="form-control" rows="3" placeholder="Why should you get this reservation?">{{ old('note') }}</textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" id="submitBtn" class="btn btn-reserve">SUBMIT RESERVATION REQUEST</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // JS Logic to prevent double submission
    const form = document.getElementById('reservationForm');
    const btn = document.getElementById('submitBtn');

    form.addEventListener('submit', function() {
        btn.innerHTML = 'Validating... Please wait.';
        btn.classList.add('opacity-50');
        btn.disabled = true;
    });
</script>
</body>
</html>