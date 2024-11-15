@extends('admin.layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-7xl">
    <div class="bg-white rounded-xl shadow-2xl p-8">
        <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-4">Create New Tour</h2>
        <!-- Progress Steps -->
        <div class="mb-12">
            <div class="flex items-center">
                <div class="flex flex-col items-center text-teal-600">
                    <div class="rounded-full transition duration-500 ease-in-out h-16 w-16 py-3 border-4 border-teal-600 flex items-center justify-center hover:bg-teal-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                    </div>
                    <div class="text-center mt-4 w-32 text-sm font-semibold uppercase text-teal-600">Basic Info</div>
                </div>

                <div class="flex-auto border-t-4 transition duration-500 ease-in-out border-teal-600"></div>
                
                <div class="flex items-center text-white relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-16 w-16 py-3 border-4 bg-teal-600 border-teal-600 flex items-center justify-center hover:bg-teal-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-20 w-32 text-sm font-semibold uppercase text-teal-600">Location</div>
                </div>

                <div class="flex-auto border-t-4 transition duration-500 ease-in-out border-gray-300"></div>
                
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-16 w-16 py-3 border-4 border-gray-300 flex items-center justify-center hover:border-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-20 w-32 text-sm font-semibold uppercase text-gray-500">Itinerary</div>
                </div>

                <div class="flex-auto border-t-4 transition duration-500 ease-in-out border-gray-300"></div>
                
                <div class="flex items-center text-gray-500 relative">
                    <div class="rounded-full transition duration-500 ease-in-out h-16 w-16 py-3 border-4 border-gray-300 flex items-center justify-center hover:border-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60%" height="60%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <div class="absolute top-0 -ml-10 text-center mt-20 w-32 text-sm font-semibold uppercase text-gray-500">Confirm</div>
                </div>
            </div>
        </div>

        <form id="tourForm" class="space-y-8">
            @csrf
            <!-- Step 1: Basic Information -->
            <div id="step1" class="step">
                <h3 class="text-xl font-bold mb-6 text-gray-800 flex items-center">
                    <span class="bg-teal-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3">1</span>
                    Basic Information
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Tour Name *</label>
                        <input type="text" name="tour_name" id="tour_name" required 
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200">
                    </div>
                    
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Duration (Days) *</label>
                        <input type="number" name="duration_days" id="duration_days" required min="1"
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Max Participants *</label>
                        <input type="number" name="max_participants" id="max_participants" required min="1"
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Category *</label>
                        <select name="category" id="category" required
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200">
                            <option value="">Select Category</option>
                            <option value="adventure">Adventure</option>
                            <option value="cultural">Cultural</option>
                            <option value="nature">Nature</option>
                            <option value="beach">Beach</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Transportation</label>
                        <input type="text" name="transportation" id="transportation"
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200">
                    </div>

                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Location *</label>
                        <select name="location_id" id="location_id" required
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200">
                            <option value="">Select Location</option>
                            @foreach($locations as $location)
                                <option value="{{ $location->location_id }}">{{ $location->location_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Highlight Places *</label>
                        <textarea name="highlight_places" id="highlight_places" required rows="4"
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200"
                            placeholder="Enter highlight places, separated by commas"></textarea>
                    </div>

                    <div class="col-span-2 grid grid-cols-2 gap-6">
                        <div class="flex items-center space-x-4">
                            <input type="checkbox" name="include_hotel" id="include_hotel" 
                                class="w-5 h-5 text-teal-600 border-2 border-gray-300 rounded focus:ring-teal-500"
                                checked>
                            <label class="text-gray-700 font-medium">Include Hotel</label>
                        </div>

                        <div class="flex items-center space-x-4">
                            <input type="checkbox" name="include_meal" id="include_meal"
                                class="w-5 h-5 text-teal-600 border-2 border-gray-300 rounded focus:ring-teal-500"
                                checked>
                            <label class="text-gray-700 font-medium">Include Meal</label>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <input type="checkbox" name="is_active" id="is_active"
                            class="w-5 h-5 text-teal-600 border-2 border-gray-300 rounded focus:ring-teal-500"
                            checked>
                        <label class="text-gray-700 font-medium">Is Active</label>
                    </div>
                </div>
            </div>

            <!-- Step 2: Location Details -->
            <div id="step2" class="step hidden">
                <h3 class="text-xl font-bold mb-6 text-gray-800 flex items-center">
                    <span class="bg-teal-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3">2</span>
                    Location Details
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Start Location</label>
                        <input type="text" name="start_location" 
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200">
                    </div>
                    
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">End Location</label>
                        <input type="text" name="end_location" 
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200">
                    </div>
                    
                    <div class="col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Destinations (comma-separated)</label>
                        <textarea name="destinations" rows="4"
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200"
                            placeholder="Enter destinations, separated by commas"></textarea>
                    </div>
                </div>
            </div>

            <div id="step3" class="step hidden">
                <h3 class="text-xl font-bold mb-6 text-gray-800 flex items-center">
                    <span class="bg-teal-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3">3</span>
                    Itinerary
                </h3>
                
                <div id="itineraryContainer" class="space-y-6">
                    <div class="itinerary-day bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                        <h4 class="text-lg font-semibold mb-4 text-gray-800">Day 1</h4>
                        <textarea name="itinerary[]" rows="4"
                            class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 transition duration-200"
                            placeholder="Describe the activities for this day"></textarea>
                    </div>
                </div>
                
                <button type="button" id="addDay" 
                    class="mt-6 px-6 py-3 text-sm font-semibold rounded-lg border-2 border-teal-600 text-teal-600 hover:bg-teal-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition duration-200 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Add Another Day
                </button>
            </div>

            <!-- Step 4: Confirmation -->
            <div id="step4" class="step hidden">
                <h3 class="text-xl font-bold mb-6 text-gray-800 flex items-center">
                    <span class="bg-teal-600 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3">4</span>
                    Confirm Tour Details
                </h3>
                
                <div id="tourSummary" class="bg-gray-50 p-8 rounded-xl shadow-sm space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <h4 class="font-semibold text-teal-600">Basic Information</h4>
                            <div class="space-y-2">
                                <p class="flex justify-between">
                                    <span class="text-gray-600">Tour Name:</span>
                                    <span class="font-medium text-gray-800" id="summary-tour-name"></span>
                                </p>
                                <p class="flex justify-between">
                                    <span class="text-gray-600">Duration:</span>
                                    <span class="font-medium text-gray-800" id="summary-duration"></span>
                                </p>
                                <p class="flex justify-between">
                                    <span class="text-gray-600">Category:</span>
                                    <span class="font-medium text-gray-800" id="summary-category"></span>
                                </p>
                                <p class="flex justify-between">
                                    <span class="text-gray-600">Max Participants:</span>
                                    <span class="font-medium text-gray-800" id="summary-max-participants"></span>
                                </p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h4 class="font-semibold text-teal-600">Location Details</h4>
                            <div class="space-y-2">
                                <p class="flex justify-between">
                                    <span class="text-gray-600">Start Location:</span>
                                    <span class="font-medium text-gray-800" id="summary-start-location"></span>
                                </p>
                                <p class="flex justify-between">
                                    <span class="text-gray-600">End Location:</span>
                                    <span class="font-medium text-gray-800" id="summary-end-location"></span>
                                </p>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <h4 class="font-semibold text-teal-600 mb-4">Included Services</h4>
                            <div class="flex space-x-8">
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span id="summary-hotel" class="text-gray-700">Hotel Included</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    <span id="summary-meal" class="text-gray-700">Meals Included</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <h4 class="font-semibold text-teal-600 mb-4">Highlight Places</h4>
                            <div class="bg-white p-4 rounded-lg border border-gray-200" id="summary-highlights">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between mt-12">
                <button type="button" id="prevBtn" 
                    class="px-8 py-4 text-base font-semibold rounded-lg border-2 border-teal-600 text-teal-600 hover:bg-teal-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition duration-200 hidden">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        Previous
                    </span>
                </button>
                
                <button type="button" id="nextBtn"
                    class="px-8 py-4 text-base font-semibold rounded-lg bg-teal-600 text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition duration-200">
                    <span class="flex items-center">
                        Next
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
                
                <button type="submit" id="submitBtn"
                    class="px-8 py-4 text-base font-semibold rounded-lg bg-green-600 text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-200 hidden">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Create Tour
                    </span>
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
                        window.location.href = response.redirect_url;
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
