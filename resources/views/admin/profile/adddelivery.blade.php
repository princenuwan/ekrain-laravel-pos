@extends('admin.layouts.master')

@section('content')

<section class="container-fluid py-4 modern-tax-section">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 ">
            <div class="card p-3 shadow-sm">
                <h3 class="text-dark fw-bold mb-4 text-center">Add Delivery Info</h3>

                <!-- Existing Locations Dropdown -->
                <div class="mb-2">
                    <label for="location_name" class="form-label fw-semibold">Check Existing Location</label>
                    <select name="location_name" class="form-select @error('location_name') is-invalid @enderror" id="location_name">
                        <option value="">Choose existing location...</option>
                        @foreach ($locations as $item)
                            <option value="{{ $item->location_name }}" data-fee="{{ $item->fees }}"
                                @if (old('location_name') == $item->location_name) selected @endif>
                                {{ $item->location_name }} - {{ $item->fees }} Ks
                            </option>
                        @endforeach
                    </select>

                </div>

                <hr>

                <!-- Delivery Info Form -->
                <small class="fw-semibold mb-2">Add New or Update</small>
                <form action="{{ route('addDeliFees')}}" method="POST">
                    @csrf

                    <div class="form-floating mb-4">
                        <input type="text" name="location" id="location"
                            class="form-control @error('location') is-invalid @enderror"
                            placeholder="Enter new location...">
                        <label for="location">Location</label>
                        @error('location')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-floating mb-4">
                        <input type="number" name="deli_fees" id="deli_fees"
                            class="form-control @error('deli_fees') is-invalid @enderror"
                            placeholder="Enter delivery fees">
                        <label for="deli_fees">Delivery Fees</label>
                        @error('deli_fees')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" value="add" name="action"
                                class="btn btn-primary w-100 shadow-sm rounded-pill">
                                <i class="fas fa-plus-circle me-1"></i> Save
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="submit" name="action" value="update"
                                class="btn btn-dark w-100 shadow-sm rounded-pill">
                                <i class="fas fa-sync-alt me-1"></i> Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const select = document.getElementById('location_name');
        const locationInput = document.getElementById('location');
        const feeInput = document.getElementById('deli_fees');

        select.addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const location = selectedOption.value;
            const fee = selectedOption.getAttribute('data-fee');

            if (location) {
                locationInput.value = location;
                feeInput.value = fee;
            } else {
                locationInput.value = '';
                feeInput.value = '';
            }
        });
    });
</script>
