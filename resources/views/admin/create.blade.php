@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold mb-6">Create New Tour</h2>

        <div class="mb-8">
            <div class="flex items-center">
                <div class="flex items-center text-teal-600 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">Basic Info</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-600"></div>
                <div class="flex items-center text-white relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-teal-600 border-teal-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">Location</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Itinerary</div>
                </div>
                <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Confirm</div>
                </div>
            </div>
        </div>

        <form id="tourForm" class="space-y-6">
            @csrf
            <!-- Step 1: Basic Information -->
            <div id="step1" class="step">
                <h3 class="text-lg font-medium mb-4">Basic Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tour Name *</label>
                        <input type="text" name="tour_name" id="tour_name" required 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Duration (Days) *</label>
                        <input type="number" name="duration_days" id="duration_days" required min="1"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Max Participants *</label>
                        <input type="number" name="max_participants" id="max_participants" required min="1"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Category *</label>
                        <select name="category" id="category" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="">Select Category</option>
                            <option value="adventure">Adventure</option>
                            <option value="cultural">Cultural</option>
                            <option value="nature">Nature</option>
                            <option value="beach">Beach</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Transportation</label>
                        <input type="text" name="transportation" id="transportation"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <!-- Location ID - Required -->
                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Location *</label>
                        <select name="location_id" id="location_id" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="">Select Location</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->location_id }}">{{ $location->location_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Highlight Places *</label>
                        <textarea name="highlight_places" id="highlight_places" required rows="3"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Enter highlight places, separated by commas"></textarea>
                    </div>

                    <div class="col-span-2 grid grid-cols-2 gap-4">
                    <div>
                        <label class="inline-flex items-center">
                            <input type="hidden" name="include_hotel" value="0">
                            <input type="checkbox" name="include_hotel" id="include_hotel" 
                                value="1"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                checked>
                            <span class="ml-2">Include Hotel</span>
                        </label>
                    </div>

                    <div>
                        <label class="inline-flex items-center">
                            <input type="hidden" name="include_meal" value="0">
                            <input type="checkbox" name="include_meal" id="include_meal"
                                value="1"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                checked>
                            <span class="ml-2">Include Meal</span>
                        </label>
                    </div>

                </div>
                    <div>
                        <label class="inline-flex items-center">
                            <input type="hidden" name="is_active" value="0">
                            <input type="checkbox" name="is_active" id="is_active"
                                value="1"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                checked>
                            <span class="ml-2">Is Active</span>
                        </label>
                    </div>
                </div>
            </div>


            <!-- Step 2: Location Details -->
            <div id="step2" class="step hidden">
                <h3 class="text-lg font-medium mb-4">Location Details</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Start Location</label>
                        <input type="text" name="start_location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">End Location</label>
                        <input type="text" name="end_location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-700">Destinations (comma-separated)</label>
                        <input type="text" name="destinations" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                </div>
            </div>

            <!-- Step 3: Itinerary -->
            <div id="step3" class="step hidden">
                <h3 class="text-lg font-medium mb-4">Itinerary</h3>
                <div id="itineraryContainer">
                    <div class="itinerary-day mb-4">
                        <h4 class="text-md font-medium mb-2">Day 1</h4>
                        <textarea name="itinerary[]" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Describe the activities for this day"></textarea>
                    </div>
                </div>
                <button type="button" id="addDay" class="mt-2 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Add Another Day
                </button>
            </div>

            <!-- Step 4: Confirmation -->
            <div id="step4" class="step hidden">
                <h3 class="text-lg font-medium mb-4">Confirm Tour Details</h3>
                <div id="tourSummary" class="bg-gray-100 p-4 rounded-md">
                    <!-- Tour summary will be populated here -->
                </div>
            </div>

            <div class="flex justify-between mt-8">
                <button type="button" id="prevBtn" class="px-4 py-2 border border-transparent text-sm font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Previous
                </button>
                <button type="button" id="nextBtn" class="px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Next
                </button>
                <button type="submit" id="submitBtn" class="hidden px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Create Tour
                </button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentStep = 1;
        const form = document.getElementById('tourForm');
        const nextBtn = document.getElementById('nextBtn');
        const prevBtn = document.getElementById('prevBtn');
        const submitBtn = document.getElementById('submitBtn');
        const addDayBtn = document.getElementById('addDay');
        const itineraryContainer = document.getElementById('itineraryContainer');
        let dayCount = 1;

        function showStep(step) {
            document.querySelectorAll('.step').forEach(s => s.classList.add('hidden'));
            document.getElementById(`step${step}`).classList.remove('hidden');

            if (step === 1) {
                prevBtn.classList.add('hidden');
            } else {
                prevBtn.classList.remove('hidden');
            }

            if (step === 4) {
                nextBtn.classList.add('hidden');
                submitBtn.classList.remove('hidden');
                updateTourSummary();
            } else {
                nextBtn.classList.remove('hidden');
                submitBtn.classList.add('hidden');
            }
        }

        nextBtn.addEventListener('click', () => {
            if (currentStep < 4) {
                currentStep++;
                showStep(currentStep);
            }
        });

        prevBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });

        addDayBtn.addEventListener('click', () => {
            dayCount++;
            const newDay = document.createElement('div');
            newDay.classList.add('itinerary-day', 'mb-4');
            newDay.innerHTML = `
                <h4 class="text-md font-medium mb-2">Day ${dayCount}</h4>
                <textarea name="itinerary[]" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Describe the activities for this day"></textarea>
            `;
            itineraryContainer.appendChild(newDay);
        });

        function updateTourSummary() {
            const summary = document.getElementById('tourSummary');
            summary.innerHTML = `
                <p><strong>Tour Name:</strong> ${form.tour_name.value}</p>
                <p><strong>Duration:</strong> ${form.duration_days.value} days</p>
                <p><strong>Category:</strong> ${form.category.value}</p>
                <p><strong>Max Participants:</strong> ${form.max_participants.value}</p>
                <p><strong>Start Location:</strong> ${form.start_location.value}</p>
                <p><strong>End Location:</strong> ${form.end_location.value}</p>
                <p><strong>Destinations:</strong> ${form.destinations.value}</p>
            `;
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you would typically send the form data to your server using AJAX
            console.log('Form submitted');
            // Example AJAX call (you need to implement this)
            // submitFormData();
        });

        // Initial setup
        showStep(1);
    });

    // Function to submit form data (you need to implement this)
    function submitFormData() {
        // Validate required fields
        const requiredFields = [
            'tour_name',
            'duration_days',
            'max_participants',
            'category',
            'location_id',
            'highlight_places'
        ];

        for (const field of requiredFields) {
            const element = document.getElementById(field);
            if (!element.value) {
                showErrorMessage(`${field.replace('_', ' ')} is required`);
                element.focus();
                return;
            }
        }

        var formData = {
            '_token': $('meta[name="csrf-token"]').attr('content'),
            'tour_name': $('#tour_name').val(),
            'duration_days': parseInt($('#duration_days').val()),
            'max_participants': parseInt($('#max_participants').val()),
            'category': $('#category').val(),
            'transportation': $('#transportation').val() || '',
            'include_hotel': $('#include_hotel').is(':checked') ? 1 : 0,
            'include_meal': $('#include_meal').is(':checked') ? 1 : 0,
            'highlight_places': $('#highlight_places').val(),
            'is_active': $('#is_active').is(':checked') ? 1 : 0,
            'location_id': parseInt($('#location_id').val())
        };

        $.ajax({
            url: "{{ route('tours.store') }}",
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    showSuccessMessage('Tour created successfully!');
                    setTimeout(() => {
                        window.location.href = '/admin/tours';
                    }, 1500);
                } else {
                    showErrorMessage(response.message || 'An error occurred');
                }
            },
            error: function(xhr, status, error) {
                var errorMessage = 'An error occurred';
                if (xhr.responseJSON) {
                    if (xhr.responseJSON.errors) {
                        errorMessage = Object.values(xhr.responseJSON.errors).flat().join('\n');
                    } else if (xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                }
                showErrorMessage(errorMessage);
            }
        });
    }






    function showSuccessMessage(message) {
        const alertDiv = document.createElement('div');
        alertDiv.className = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4';
        alertDiv.role = 'alert';
        alertDiv.innerHTML = `
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">${message}</span>
        `;
        document.querySelector('.container').prepend(alertDiv);
        setTimeout(() => alertDiv.remove(), 5000); // Remove after 5 seconds
    }

    function showErrorMessage(message) {
        const alertDiv = document.createElement('div');
        alertDiv.className = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4';
        alertDiv.role = 'alert';
        alertDiv.innerHTML = `
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">${message}</span>
        `;
        document.querySelector('.container').prepend(alertDiv);
        setTimeout(() => alertDiv.remove(), 5000); // Remove after 5 seconds
    }

    // Thêm event listener cho nút submit
    document.getElementById('submitBtn').addEventListener('click', function(e) {
        e.preventDefault();
        submitFormData();
    });
</script>
@endsection
