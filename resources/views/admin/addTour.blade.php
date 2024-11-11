@extends('user.layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-6">
    <h1 class="text-2xl font-bold mb-6">Add New Tour</h1>
    <form action="{{ route('addTour') }}" method="post" enctype="multipart/form-data" class="space-y-6">
    @csrf

        <!-- Basic Tour Information -->
        <div class="bg-gray-50 p-4 rounded-lg space-y-4">
        <h2 class="text-lg font-semibold mb-4">Tour Information</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Tour Name</label>
                <input type="text" name="tour_name" value="{{ old('tour_name') }}" required maxlength="200"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="">Select Category</option>
                    <option value="all-inclusive" {{ old('category') == 'all-inclusive' ? 'selected' : '' }}>Tour trọn gói (all-inclusive)</option>
                    <option value="group-tour" {{ old('category') == 'group-tour' ? 'selected' : '' }}>Tour theo nhóm (group tour)</option>
                    <option value="self-guided" {{ old('category') == 'self-guided' ? 'selected' : '' }}>Tour tự túc (self-guided tour)</option>
                    <option value="private-tour" {{ old('category') == 'private-tour' ? 'selected' : '' }}>Tour cá nhân (private tour)</option>
                </select>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" rows="4"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('description') }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Duration (days)</label>
                <input type="number" name="duration_days" value="{{ old('duration_days') }}" required min="1"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Max Participants</label>
                <input type="number" name="max_participants" value="{{ old('max_participants') }}" min="1"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Transportation</label>
                <input type="text" name="transportation" value="{{ old('transportation') }}" maxlength="100"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Highlight Places</label>
            <textarea name="highlight_places" rows="3"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('highlight_places') }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Include Hotel</label>
                <select name="include_hotel" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="1" {{ old('include_hotel') == '1' ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('include_hotel') == '0' ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Include Meal</label>
                <select name="include_meal" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="1" {{ old('include_meal') == '1' ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('include_meal') == '0' ? 'selected' : '' }}>No</option>
                </select>
            </div>
        </div>
    </div>
    <!-- Pricing Information -->
<div class="bg-gray-50 p-4 rounded-lg space-y-4 mt-6">
    <h2 class="text-lg font-semibold mb-4">Pricing Information</h2>
    
    <div>
        <label class="block text-sm font-medium text-gray-700">Price List Name</label>
        <input type="text" name="price_list_name" value="{{ old('price_list_name') }}" required
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Valid From</label>
            <input type="date" name="valid_from" value="{{ old('valid_from') }}" required
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Valid To</label>
            <input type="date" name="valid_to" value="{{ old('valid_to') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700">Description</label>
        <textarea name="price_description" rows="2"
                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('price_description') }}</textarea>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Adult Price</label>
            <input type="number" name="price_ADULT" value="{{ old('price_ADULT') }}" required step="0.01"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Child Price</label>
            <input type="number" name="price_CHILD" value="{{ old('price_CHILD') }}" required step="0.01"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Infant Price</label>
            <input type="number" name="price_INFANT" value="{{ old('price_INFANT') }}" required step="0.01"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Senior Price</label>
            <input type="number" name="price_SENIOR" value="{{ old('price_SENIOR') }}" required step="0.01"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>
    </div>
</div>


    <!-- Status -->
    <div class="bg-gray-50 p-4 rounded-lg">
        <div class="flex items-center justify-between">
            <div>
                <label class="block text-sm font-medium text-gray-700">Is Active</label>
                <select name="is_active" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end space-x-4">
        <button type="button" onclick="history.back()" 
            class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Cancel
        </button>
        <button type="submit"
            class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Create Tour
        </button>
    </div>
    </form>
</div>
@endsection
